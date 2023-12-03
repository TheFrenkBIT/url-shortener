<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use App\Models\Url;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Url $url)
    {
        return view('url.show', compact('url'));
    }
}
