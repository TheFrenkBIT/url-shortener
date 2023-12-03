<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use App\Http\Requests\Url\StoreRequest;
use App\Models\Url;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['code'] = $this->generateCode();
        $url = Url::create($data);
        return redirect()->route('url.show', $url->id);
    }
    private function generateCode() : string
    {
        do {
            $code = substr(uniqid(), 0, rand(5, 8));
            $existCode = Url::where([
                'code' => $code
            ])->first();
        } while($existCode !== null);
        return $code;
    }
}
