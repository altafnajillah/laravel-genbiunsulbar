<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Demisioner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];

    protected static function boot()
    {
        parent::boot();

        /** @var Demisioner $demisioner */
        static::updating(function ($demisioner) {
            if ($demisioner->isDirty('image') && ($demisioner->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($demisioner->getOriginal('image'));
            }
        });

        static::deleting(function ($demisioner) {
            if ($demisioner->getOriginal('image') !== null) {
                Storage::disk('public')->delete($demisioner->getOriginal('image'));
            }
        });
    }
}
