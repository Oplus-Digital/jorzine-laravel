<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InterviewRequest;
use App\Models\Interview;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.interviews.index', [
            'interviews' => Interview::latest('date')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.interviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InterviewRequest $request)
    {
        $validator = $request->validated();
        $validator['posted_by_user'] = auth()->user()->name;
        $validator['date'] = Carbon::now();
        Interview::create($validator);
        return redirect(route('admin.interviews.index'))->with('success', 'Interview Added Successfully');
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
        return view('admin.interviews.edit', [
            'interview' => Interview::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InterviewRequest $request, string $id)
    {
        $interview = Interview::findOrFail($id);
        $validator = $request->validated();
        $validator['modified_by_user'] = auth()->user()->name;
        $validator['last_modified'] = Carbon::now();
        $interview->update($validator);
        return redirect(route('admin.interviews.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $interview = Interview::findOrFail($id);
        $interview->delete();
        return 'Done';
    }
}
