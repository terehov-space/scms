<?php

namespace Terehov\Scms\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Terehov\Scms\Models\Route;

class PageController extends Controller
{
    public function list(Request $request)
    {
        $routes = Route::get();
        return view('cms::pages')->with('routes', $routes);
    }

    public function show(Request $request, $id)
    {
        $message = 'Edit page';
        return view('cms::cms')->with('message', $message);
    }
}
