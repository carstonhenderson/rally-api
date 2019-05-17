<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'mood',
        'notes'
    ];
    
    protected $appends = [
        "emoji"
    ];
    
    protected $moods = [
        "great" => "😁",
        "good" => "🙂",
        "fine" => "😐",
        "bad" => "🙁",
        "terrible" => "😞"
    ];

    public function getEmojiAttribute()
    {
        return $this->moods[$this->mood];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
