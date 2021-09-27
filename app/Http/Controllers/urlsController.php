<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urlsController extends Controller
{
    public function submit_url(){
        $data = array(
            'title' => 'Generate Url code'
        );
        return view('submitUrl')->with($data);
    }
}
