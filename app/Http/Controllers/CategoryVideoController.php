<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    public function index(Category $category)
    {
        $videos=$category->videos;
        return view('video.index',compact('videos','category'));

        // $videos=Video::where('category_id',$category);
        // dd($videos);
    }
}
