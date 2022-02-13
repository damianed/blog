<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function isPublished(): Attribute
    {
        return new Attribute(
            set: fn ($value) => (bool) $value,
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
