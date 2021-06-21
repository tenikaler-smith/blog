<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function plantilla(){
        return view("plantilla.html.ltr");
    }

    public function index(){
        return view("index");
    }

    public function app(){
        return view("theme.back.app");
    }

    public function login(){
        return view("theme.back.login");
    }
}
