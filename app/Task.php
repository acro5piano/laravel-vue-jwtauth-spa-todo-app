<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['user_id', 'title', 'is_done'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
