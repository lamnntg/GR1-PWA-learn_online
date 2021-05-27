<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamConfig extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exam_configs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
        'question_category_id',
        'question_degree_id',
        'quota',
    ];

    protected $dates = ['deleted_at'];

    public function questionCategory()
    {
        return $this->belongsTo(QuestionCategory::class, 'question_category_id');
    }

    public function questionDegree()
    {
        return $this->belongsTo(QuestionDegree::class, 'question_degree_id');
    }
}
