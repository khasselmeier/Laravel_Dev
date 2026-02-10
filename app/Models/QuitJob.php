<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuitJob extends Model
{
    protected $fillable = [
        'title',
        'description',
        'job_description',
        'salary',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
