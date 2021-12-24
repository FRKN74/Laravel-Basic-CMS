<?php

namespace App\Http\Controllers\Front;
use Illuminate\Pagination\lengthawarepaginator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

use App\Models\Article;

class FrontController extends Controller
{
    public function article()
    {
        $article = Article::orderBy('created_at','DESC')->paginate(2);
        return view('content',compact('article'));
    }
}
