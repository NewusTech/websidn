<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function ComponentPage()
    {
        return view('admin.pages.components.index');
    }
}
