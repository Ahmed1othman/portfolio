<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class effects extends Controller
{
     function list()
    {
       return Http::get("https://Jsonplaceholder.typicode.com/posts");
    }
}
