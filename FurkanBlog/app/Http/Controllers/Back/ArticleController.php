<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
//Requests
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
//Models
use App\Models\Article;

//STR
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('index',compact('article'));
    }

    public function create()
    {
        return view('back.crud.create');
    }

    public function createPost(CreateRequest $request)
    {
        $article = new Article;
        $article->title = $request->title;
        //$article->category_id = $request->title;
        $article->content = $request->content;
        $article->slug = Str::slug($request->title);

        if($request->hasFile('image')){

            $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);

            $article->image = 'uploads/'.$imageName;
        }
        $article->save();

        toastr()->success('Makale başarılı bir şekilde eklendi.');
        return redirect()->route('admin.articles')->with('message','Makale Oluşturuldu.');
    }

    public function update($id)
    {
        $article = Article::find($id);
        return view('back.crud.update',compact('article'));
    }
    public function updatePost(UpdateRequest $request , $id)
    {   
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        //$article->category_id = $request->title;
        $article->content = $request->content;

        if($request->hasFile('image')){

            $imageName = str_slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);

            $article->image = 'uploads/'.$imageName;
        }
        $article->save();

        return redirect()->route('admin.articles')->with('message','Makale güncellendi.');

    }

    public function destroy($id)
    {
        
        Article::find($id)->where('id',$id)->delete();
        
        return Redirect()->route('admin.articles')->with('message','Makale Silindi');
    }

    public function show()
    {
        $article = Article::get();
        return view('back.crud.articles',compact('article'));
    }
    public function contentview($id)
    {
        $article = Article::where('id',$id)->get();
        return view('content',compact('article'));
    }

}
