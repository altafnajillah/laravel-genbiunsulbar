<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paragraphs()
    {
        return $this->hasMany(NewsParagraph::class);
    }

    protected static function boot()
    {
        parent::boot();

        /** @var News $news */
        static::updating(function ($news) {
            if ($news->isDirty('image') && ($news->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($news->getOriginal('image'));
            }
        });

        static::deleting(function ($news) {
            if ($news->getOriginal('image') !== null) {
                Storage::disk('public')->delete($news->getOriginal('image'));
            }
        });
    }
}
