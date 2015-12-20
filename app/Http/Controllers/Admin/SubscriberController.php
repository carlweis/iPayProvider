<?php

namespace IPayProvider\Http\Controllers\Admin;

use Request;
use IPayProvider\Http\Requests;
use IPayProvider\Http\Requests\BetaSignupRequest;
use IPayProvider\Http\Controllers\Controller;
use IPayProvider\Admin\Services\Subscribers;
use IPayProvider\Services\MailChimp;
use IPayProvider\Models\Signup;
use IPayProvider\Admin\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribersService = new Subscribers();
        $subscribers = $subscribersService->all(5);
        $totalSubscribers = Subscriber::all()->count();
        return view('admin.subscribers.index', ['subscribers' => $subscribers, 'totalSubscribers' => $totalSubscribers]);
    }

    public function store(BetaSignupRequest $request)
    {
        // create a new signup
        $signup = new Signup();
        $signup->fname = $request['fname'];
        $signup->lname = $request['lname'];
        $signup->email = $request['email'];
        $signup->zip   = $request['zip'];
        $signup->ip    = $_SERVER['REMOTE_ADDR'];

        try {
            // save the signup
            $signup->save();
            // add it to mailchimp
            $mailchimp = new MailChimp();
            $mailchimp->addSubscriber([
                'email' => $signup->email,
                'fname' => $signup->fname,
                'lname' => $signup->lname,
                'zip'   => $signup->zip
            ]);
            return redirect('/admin/subscribers')
                ->withSuccess("New subscriber {$signup->fname}&nbsp;{$signup->lname} was added.");
        } catch (\Exception $e) {
            return redirect('/admin/subscribers')
                ->withError('Duplicate beta registration exists.');
        }
    }

    public function import(Request $request)
    {
        if (Request::hasFile('import-file')) {
            $file = Request::file('import-file');
            $subscribers = \League\Csv\Reader::createFromPath($file);
            $subscribers = $subscribers->fetchAssoc();

            if (count($subscribers) > 0) {
                $mailchimp = new MailChimp();
                foreach($subscribers as $subscriber) {
                    // create the signup
                    $signup = new Signup();
                    $signup->fname = $subscriber['fname'];
                    $signup->lname = $subscriber['lname'];
                    $signup->email = $subscriber['email'];
                    $signup->zip   = $subscriber['zip'];
                    $signup->ip    = $_SERVER['REMOTE_ADDR'];
                    try {
                        // save the signup
                        $signup->save();
                        // add it to mailchimp
                        $mailchimp->addSubscriber([
                            'email' => $signup->email,
                            'fname' => $signup->fname,
                            'lname' => $signup->lname,
                            'zip'   => $signup->zip
                        ]);
                    } catch(\Exception $e) {}
                }
                return redirect('admin/subscribers')->withSuccess('Subscribers import completed.');
            }
        } else {
            echo 'no file uploaded';
        }
        
    }
}
