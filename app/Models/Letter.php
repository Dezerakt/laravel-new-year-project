<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Gift;

class Letter extends Model
{
    public function gifts(){
        return $this->belongsToMany(Gift::class);
    }

    public function author(){
        return $this->belongToMany(User::class, 'author_id');
    }
    

}
