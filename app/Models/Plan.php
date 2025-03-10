<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Plan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function galleries() {
        return $this->hasMany(Gallery::class);
    }
}
