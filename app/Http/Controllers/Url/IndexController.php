<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use App\Models\Url;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('url.index');
    }
}
