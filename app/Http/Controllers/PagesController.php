<?php

namespace IPayProvider\Http\Controllers;

use Illuminate\Http\Request;

use IPayProvider\Http\Requests;
use IPayProvider\Http\Controllers\Controller;
use IPayProvider\Models\User;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.index");
    }
}
