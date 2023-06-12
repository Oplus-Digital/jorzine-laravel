<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.reviews.index', [
            'reviews' => Review::latest('date')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        $validator = $request->validated();
        $validator['posted_by_user'] = auth()->user()->name;
        $validator['date'] = Carbon::now();
        Review::create($validator);
        return redirect(route('admin.reviews.index'))->with('success', 'Review Added Successfully');
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
        return view('admin.reviews.edit', [
            'review' => Review::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, string $id)
    {
        $review = Review::findOrFail($id);
        $validator = $request->validated();
        $validator['modified_by_user'] = auth()->user()->name;
        $validator['last_modified'] = Carbon::now();
        $review->update($validator);
        return redirect(route('admin.reviews.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return 'Done';
    }
}
