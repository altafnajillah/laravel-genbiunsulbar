<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Message;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    // Scholarship Page
    public function scholarship(): View
    {
        $documents = Document::all();
        $is_open = Page::find(0)->is_open;
        return view('scholarship', compact('documents', 'is_open'));
    }

    public function sendMessage(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);

            $message = new Message();
            $message->sent_at = now();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->message = $request->message;
            $message->save();

            return redirect('/')->with('success', 'Pesan kamu dikirim!');

        } catch (\Throwable $th) {
            return redirect('/')->with('error', 'Pesan kamu gagal dikirim!');
        }

    }
}
