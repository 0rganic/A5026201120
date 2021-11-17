<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showphp()
    {

        return view('CekKelulusan');
    }

    function resulthasil()
    {
        //code untuk meload data yg akan dimuat di form
        return view('file');
    }

    function showETS()
    {
        //code untuk meload data yg akan dimuat di form
        return view('utshtml');
    }
}
