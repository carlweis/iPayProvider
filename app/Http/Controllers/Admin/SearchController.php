<?php

namespace IPayProvider\Http\Controllers\Admin;

use Illuminate\Http\Request;

use IPayProvider\Http\Requests;
use IPayProvider\Http\Controllers\Controller;

use IPayProvider\Admin\Models\Subscriber;

class SearchController extends Controller
{
    public function show($entity, $query)
    {
        dd($query);
        
    }
}
