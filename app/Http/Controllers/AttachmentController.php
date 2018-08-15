<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttachmentController extends Controller
{
    public function interfaceuploadfile() {
        return view('attach.form_upload');
    }
    
    public function savefile(Request $request) {
        if ($request->hasFile("attachment")) {
            $attach = new \App\attachment();
            $attach->upload($request);
        }
        return redirect('Admin/Upload.html');
    }
}
