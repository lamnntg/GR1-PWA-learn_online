<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    protected $fillable = [
        'name',
    ];

    const SUBJECT_ID_1 = '1';
    const SUBJECT_ID_2 = '2';
    const SUBJECT_ID_3 = '3';
    const SUBJECT_ID_4 = '4';
    const SUBJECT_ID_5 = '5';

    public static $subject = [
        self:: SUBJECT_ID_1 => 'Tiếng Việt',
        self:: SUBJECT_ID_2 => 'Toán',
        self:: SUBJECT_ID_3 => 'Tiếng Anh',
        self:: SUBJECT_ID_4 => 'Khoa Học',
        self:: SUBJECT_ID_5 => 'Tin Học',
    ];
    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
}
