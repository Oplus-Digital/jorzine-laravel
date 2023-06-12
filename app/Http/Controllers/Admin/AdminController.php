<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:Edit Admins', ['only' => ['edit', 'update']]);
//    }


    public function index()
    {
        return view('admin.admins.index', [
            'admins' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return redirect(route('admin.admins.index'))->with('success', 'User Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return
     */
    public function edit($id)
    {
        return view('admin.admins.edit', [
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(Request $request, $id)
    {
        // $validator = $request->validated();
        $user = User::findOrFail($id);
        $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => ['nullable', 'string', 'confirmed', 'min:6'],
        ]);

        $user->update($request->all());
        return redirect(route('admin.admins.index'))->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id == $user->id) {
            return redirect(route('admin.admins.index'))->with('error', 'You Can\'t Delete your account');
        }
        $user->delete();
        return 'Done';
    }
}
