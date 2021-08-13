<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'costume_url', 'full_url', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
