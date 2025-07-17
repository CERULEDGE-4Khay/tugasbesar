<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
   public function subscribe(Request $request)
    {
    $email = filter_var(trim($request->input('email')), FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return redirect()->back()->with('error', 'Email tidak valid.');
    }

    try {
        Storage::append('subscribers.txt', $email);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Gagal menyimpan email. '.$e->getMessage());
    }

    return redirect('/')->with('success', 'Terimakasih sudah berlangganan! kamu akan mendapatkan berita terbaru dari kami.');
    }

}

