<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Http\Request;
use App\Model\Category;
use Intervention\Image\Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }
    public function indexadmin()
    {
        //
        $articles=Article::with('category')->get();
        return view('admin.blog.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::all();
        return view('admin.blog.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //
       $data=request()->validate([
            'title'=>['required'],
            'category_id'=>['required'],
            'img'=>['required','image'],
            'article'=>['required']
        ]);



        $imglien= request('img')->store('uploads','public');
        //$image= Image::make(public_path("storage/{$imglien}"))->fit(2000,2000);
      //$image->save();
        Article::create([
            'title'=>$data['title'],
            'category_id'=>$data['category_id'],
            'img'=>$imglien,
            'article'=>$data['article']
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $articles)
    {
        //
        $category=Category::all();
        return view('admin.blog.show',compact('articles','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $articles)
    {
        //
        $category=Category::all();
        return view('admin.blog.edit',compact('articles','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $articles)
    {
        //
        dd($articles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $articles)
    {
        //
        Article::destroy($articles->id);
        return redirect()->back();

    }
}
