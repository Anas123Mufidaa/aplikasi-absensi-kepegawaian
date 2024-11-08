<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
           'title' => 'Home',
           'page'  => 'home'
        ];
        return view('v_template_front',$data);
    }
}
