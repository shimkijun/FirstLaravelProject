<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title','body','user_id'];

    public function tasks(){
        return $this->belongsTo(User::class);
    }
}
