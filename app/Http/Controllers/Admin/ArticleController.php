<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::latest('date')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $validator = $request->validated();
         $validator['posted_by_user'] = auth()->user()->name;
         $validator['date'] =  Carbon::now();
       //  $validator['updated_at'] =  Carbon::now();
       // dd($validator['date']);
        Article::create($validator);
        return redirect(route('admin.articles.index'))->with('success', 'Article Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.articles.edit', [
            'article' => Article::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, string $id)
    {
        $article = Article::findOrFail($id);
        $validator = $request->validated();
        $validator['modified_by_user'] = auth()->user()->name;
        $validator['last_modified'] =  Carbon::now();
        $article->update($validator);
        return redirect(route('admin.articles.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return 'Done';
    }
}
