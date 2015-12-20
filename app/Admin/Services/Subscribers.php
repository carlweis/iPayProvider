<?php 
namespace IPayProvider\Admin\Services;

use IPayProvider\Services\MailChimp;
use IPayProvider\Admin\Models\Subscriber;

class Subscribers
{
    protected $fields = [
        'email'         => '',
        'mailchimp_id'  => '',
        'euid'          => '',
        'email_type'    => '',
        'ip'            => '',
        'timestamp_opt' => '',
        'member_rating' => 0,
        'web_id'        => 0,
        'leid'          => 0,
        'list_id'       => '',
        'list_name'     => '',
        'fname'         => '',
        'lname'         => '',
        'zip'           => 0,
        'status'        => '',
        'timestamp'     => ''
    ];
    public function all($limit = 15)
    {
        $mailchimp = new MailChimp();
        $results = $mailchimp->getSubscribers();
        
        foreach($results['data'] as $result) {
            $subscriber = new Subscriber();
            // set the fields
            $subscriber->email = $result['email'];
            $subscriber->mailchimp_id = $result['id'];
            $subscriber->euid = $result['euid'];
            $subscriber->email_type = $result['email_type'];
            $subscriber->ip = $result['ip_opt'];
            $subscriber->timestamp_opt = $result['timestamp_opt'];
            $subscriber->member_rating = $result['member_rating'];
            $subscriber->web_id = $result['web_id'];
            $subscriber->leid = $result['leid'];
            $subscriber->list_id = $result['list_id'];
            $subscriber->list_name = $result['list_name'];
            $subscriber->fname = $result['merges']['FNAME'];
            $subscriber->lname = $result['merges']['LNAME'];
            $subscriber->zip = $result['merges']['ZIP'];
            $subscriber->status = $result['status'];
            $subscriber->timestamp = $result['timestamp'];
            // save the subscriber to the database
            try {
                $subscriber->save();
            } catch(\Exception $e) {
                continue;
            }
        }

        return Subscriber::paginate($limit);
    }
}