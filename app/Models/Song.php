<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    public function user() {
        // SELECT * FROM users WHERE id = $this->user_id
        return $this->belongsTo("App\Models\User");
    }
    
        public function artist()
    {
        return $this->hasOne(Artist::class, 'id');
    }
}
