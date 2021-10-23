<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"Faris", "email"=>"farismtq@gmail.com", "address"=>"Bangi"];
    }
}
