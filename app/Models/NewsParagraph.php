<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsParagraph extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paragraph) {
            $lastParagraphOrder = static::where('news_id', $paragraph->news_id)
                ->max('paragraph_order');

            $paragraph->paragraph_order = $lastParagraphOrder + 1;
        });

    }
}
