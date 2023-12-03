<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Url;

class RedirectController extends Controller
{
    public function __invoke($code)
    {
        $url = Url::where([
            'code' => $code
        ])->first();
        return redirect($url->base_url);
    }
}
