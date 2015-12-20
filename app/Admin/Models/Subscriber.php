<?php

namespace IPayProvider\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
     protected $fillable = [
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
}
