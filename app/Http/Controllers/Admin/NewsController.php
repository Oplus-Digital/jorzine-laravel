<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest('date')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $validator = $request->validated();
         $validator['posted_by_user'] = auth()->user()->name;
         $validator['date'] =  Carbon::now();
       //  $validator['updated_at'] =  Carbon::now();
       // dd($validator['date']);
        news::create($validator);
        return redirect(route('admin.news.index'))->with('success', 'News Added Successfully');
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
        return view('admin.news.edit', [
            'new' => News::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, string $id)
    {
        $new = News::findOrFail($id);
        $validator = $request->validated();
        $validator['modified_by_user'] = auth()->user()->name;
        $validator['last_modified'] =  Carbon::now();
        $new->update($validator);
        return redirect(route('admin.news.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = News::findOrFail($id);
        $new->delete();
        return 'Done';
    }
}
