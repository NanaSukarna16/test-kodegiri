<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function __invoke(Document $document)
    {
        if (!$document) {
            return 'Data tidak ditemukan';
        }

        Mail::to('kodegiri@example.com')->send(new SendEmail($document));

        return redirect()->back()->with('status', 'Berhasil mengirimkan email');;
    }
}
