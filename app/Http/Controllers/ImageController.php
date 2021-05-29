<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadImgRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadImg(UploadImgRequest $request)
    {
        $validated = $request->validated();
        $url = url(Storage::disk('local')->putFile('imgs', $validated['img']));
        return response()->json(['url' => $url]);
    }
}
