<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['user_id', 'name', 'is_done'];

    protected $casts = [
        'is_done' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
