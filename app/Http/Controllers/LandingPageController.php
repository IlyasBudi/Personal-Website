<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage()
    {
        $blogs = Blog::with('category')
            ->orderBy('id', 'ASC')
            ->paginate(8);


        return view('/landingpage', compact('blogs'));
    }
}
