<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $videos=Video::take(6)->get();
        $mostViews=Video::all()->random(6);
        $mostPups=Video::all()->random(6);
        return view('index',compact('videos','mostViews','mostPups'));
    }
}
