<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;
use App\Models\Document;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Message;
use App\Models\News;
use App\Models\Page;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function index()
    {
        $ketua = Member::where(['departemen' => 0, 'position' => 0])->first();

        $berita = News::with(['paragraphs' => function ($query) {
            $query->orderBy('paragraph_order')->limit(1);
        }])->orderBy('published_at', 'desc')->limit(2)->get();

        $berita->each(function ($item) {
            if ($item->image == null) {
                $item->image = 'images/dummy/news/dummy-news.png';
            } else {
                $item->image = 'storage/' .  $item->image;
            }
        });

        return view('index',
            [
                'ketua' => $ketua,
                'beritas' => $berita
            ]
        );
    }

    // Scholarship Page
    public function scholarship()
    {
        return view('scholarship');
    }

    public function pendaftaran()
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

        foreach ($demisioners as $demisioner) {
            if ($demisioner->image == null) {
                $demisioner->image = 'images/dummy/demisioners/dummy-demisioner.png';
            } else {
                $demisioner->image = 'storage/' .  $demisioner->image;
            }
        }

        return view('members.demisioner', compact('demisioners'));
    }

    public function getMembers()
    {
        $departemenList = [
            'inti' => 0,
            'pendidikan' => 1,
            'pubdok' => 2,
            'kewirus' => 3,
            'lkh' => 4,
            'humas' => 5
        ];

        $members = [];

        foreach ($departemenList as $name => $index) {
            $departemenMembers = Member::where('departemen', $index)->orderBy('position')->get();
            $departemenMembers->each(function ($member) {
                if ($member->image == null) {
                    $member->image = "images/dummy/members/dummy-avatar.jpg";
                } else {
                    $member->image = 'storage/' .  $member->image;
                }
            });
            $members[$name] = $departemenMembers;
        }

        return view('members.pengurus', $members);
    }

    // News Page
    public function news()
    {
        $news = News::with(['paragraphs' => function ($query) {
            $query->orderBy('paragraph_order')->limit(1);
        }])->orderBy('published_at', 'desc')->get();

        Carbon::setLocale('id');
        $news->each(function ($item) {
            $item->published_at = Carbon::parse($item->published_at)->translatedFormat('j F Y');

            if ($item->image == null) {
                $item->image = 'images/dummy/news/dummy-news.png';
            } else {
                $item->image = 'storage/' .  $item->image;
            }
        });

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
        $news->published_at = Carbon::parse($news->published_at)->translatedFormat('j F Y');

        if ($news->image == null) {
            $news->image = 'images/dummy/news/dummy-news.png';
        } else {
            $news->image = 'storage/' .  $news->image;
        }

        return view('show.news', compact('news'));
    }

    // Gallery
    public function gallery()
    {
        $plans = Plan::with(['galleries' => function($query) {
            $query->where('type', 'image')->limit(1);
        }])->get();

        $items = $plans->filter(function ($plan) {
            return $plan->galleries->isNotEmpty();
        })->map(function ($plan) {

            $plan->thumbnail = $plan->galleries->first()
                ? 'storage/' . $plan->galleries->first()->image
                : '/images/dummy/galleries/dummy-gallery.jpg';

            Carbon::setLocale('id');
            $plan->held_at = $plan->held_at
                ? Carbon::parse($plan->held_at)->format('j F Y')
                : $plan->held_at;

            return $plan;
        });

        return view('gallery', compact('items'));
    }


    public function showGallery($id) {
        $gallery = Plan::with('galleries')->where('id', $id)->first();
//        return json_encode($gallery);
        return view('show.gallery', compact('gallery'));
    }
}
