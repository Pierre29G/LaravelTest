<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    public function songs() {
        // SELECT * FROM photos WHERE user_id = $this->id
        return $this->hasMany("App\Models\Song");
    }
    
}
