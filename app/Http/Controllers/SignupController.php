<?php

namespace IPayProvider\Http\Controllers;

use Illuminate\Http\Request;
use IPayProvider\Services\MailChimp;
use IPayProvider\Models\Signup;
use IPayProvider\Http\Requests\BetaSignupRequest;
use IPayProvider\Http\Controllers\Controller;

class SignupController extends Controller
{
    protected $fields = [
        'fname' => '',
        'lname' => '',
        'email' => '',
        'zip'   => ''
    ];
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BetaSignupRequest $request)
    {
        // create a new signup
        $signup = new Signup();
        foreach($this->fields as $field => $default) {
            $signup->$field = $request->get($field);
        }
        // set the ip of the person signing up
        $signup->ip = $_SERVER['REMOTE_ADDR'];
        $signup->save();

        // add to mailchimp mailing list
        $mailchimp = new MailChimp();
        $mailchimp->addSubscriber([
            'email' => $signup->email,
            'fname' => $signup->fname,
            'lname' => $signup->lname,
            'zip'   => $signup->zip
        ]);
        // redirect to the thank you page
        return redirect('/signup/thankyou')
            ->withSuccess("Thank you for signing up. We will inform you once we launch.");
    }

    public function thankyou()
    {
        return view('signup.thankyou');
    }
}
