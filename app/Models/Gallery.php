<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function plan() {
        return $this->belongsTo(Plan::class);
    }

    protected static function boot()
    {
        parent::boot();

        /** @var Gallery $gallery */
        static::updating(function ($gallery) {
            if ($gallery->isDirty('images') && ($gallery->getOriginal('images') !== null)) {
                Storage::disk('public')->delete($gallery->getOriginal('images'));
            }
        });

        static::deleting(function ($gallery) {
            if ($gallery->getOriginal('images') !== null) {
                Storage::disk('public')->delete($gallery->getOriginal('images'));
            }
        });
    }
}
