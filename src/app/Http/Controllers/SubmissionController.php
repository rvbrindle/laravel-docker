<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'number' => 'required|numeric',
            'link' => 'required_without:file',
            'file' => 'required_without:link|file|mimes:mp3|max:5024']);

        ray($request);

        $path = Storage::disk('s3')->put('/files/'. $request->name.rand(1, 300), $request->file);
        $path = Storage::disk('s3')->url($path);

        return view('thanks');
    }
}
