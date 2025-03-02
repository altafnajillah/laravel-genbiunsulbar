<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;
use App\Models\Document;
use App\Models\Message;
use App\Models\News;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    // Scholarship Page
    public function scholarship(): View
    {
        return view('scholarship');
    }

    public function pendaftaran(): View
    {
        $is_open = Page::find(0)->is_open;

        if ($is_open) {
            $documents = Document::all();
            return view('pendaftaran.open', compact('documents'));

        } else {
            return view('pendaftaran.close');
        }
    }

    // Message Feature
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

    // Members and Demisioners
    public function getDemisioners()
    {
        $demisioners = Demisioner::all()->sortBy('name', descending: true);
        return view('members.demisioner', compact('demisioners'));
    }

    // News Page
    public function news()
    {
        $news = News::with(['paragraphs' => function ($query) {
            $query->orderBy('paragraph_order')->limit(1);
        }])->get();
        return view('news', compact('news'));
    }

    public function showNews($id)
    {
        $check = News::where('id', $id);

        if (!$check) return redirect('/news');

        $news = News::where('id', $id)->with(['paragraphs' => function ($query) {
            $query->orderBy('paragraph_order');
        }])->first();

        Carbon::setLocale('id');
        $news->published_at_formatted = Carbon::parse($news->published_at)->translatedFormat('j F Y');

        return view('show.news', compact('news'));
    }
}
