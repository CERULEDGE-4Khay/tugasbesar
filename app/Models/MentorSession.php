<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorSession extends Model
{
    use HasFactory;

     protected $fillable = ['user_id', 'mentor_id', 'scheduled_at', 'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
