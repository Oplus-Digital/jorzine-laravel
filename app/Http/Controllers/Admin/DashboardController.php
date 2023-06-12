<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.layouts.main');
    }

    public function active($id, $className)
    {
        $baseClass = 'App\Models\\' . $className;
        $model = $baseClass::findOrFail($id);
        $model->update(['is_active' => !$model->is_active]);
        return back()->with('success', __('Updated Successfully'));
    }

}
