<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function view_mail()
    {
        return view('admin.mail.order-mail');
    }
}
