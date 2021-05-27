<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';

    protected $fillable = [
        'subject_id',
        'name',
        'content',
        'img_url',
        'video_url'
    ];

    public function subject()
    {
        return $this->belongTo(Subject::class);
    }
}
