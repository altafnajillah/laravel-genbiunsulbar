<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        /** @var Member $member */
        static::updating(function ($member) {
            if ($member->isDirty('image') && ($member->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($member->getOriginal('image'));
            }
        });

        static::deleting(function ($member) {
            if ($member->getOriginal('image') !== null) {
                Storage::disk('public')->delete($member->getOriginal('image'));
            }
        });
    }
}
