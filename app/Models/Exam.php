<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'subject_id',
        'exam_config_id',
        'exam_type',
        'score',
        'start_at',
        'end_at',
        'completed_at',
    ];

    protected $dates = ['deleted_at'];

    public $incrementing = false;

    const EXAM_TYPE_1 = '1';
    const EXAM_TYPE_2 = '2';
    const EXAM_TYPE_3 = '3';

    public static $typeExams = [
        self:: EXAM_TYPE_1 => 'Type 1',
        self:: EXAM_TYPE_2 => 'Type 2',
        self:: EXAM_TYPE_3 => 'Type 3',
    ];

    public function question()
    {
        return $this->hasMany(ExamQuestion::class);
    }

    public function scopeExamOfUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
