<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Services\FileUploader;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index(Document $document)
    {
        return view('Document/signature', [
            'document' => $document
        ]);
    }

    public function upload(Request $request, Document $document)
    {
        if ($request->signed) {
            $this->drawImageSignature($request, $document);
        }

        if ($request->image_signed) {
            $this->uploadImageSignature($request, $document);
        }
    }

    public function uploadImageSignature(Request $request, Document $document)
    {

        $nm = $request->image_signed;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $nm->move(storage_path('app/public/signatures/'), $namaFile);

        $document->update([
            'signing' => $namaFile,
        ]);

        return back()->with('success', 'Successfully saved the signature');
    }


    public function drawImageSignature(Request $request, Document $document)
    {
        $folderPath = storage_path('app/public/signatures/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);

        $document->update([
            'signing' => uniqid() . '.' . $image_type,
        ]);

        return back()->with('success', 'Successfully saved the signature');
    }
}
