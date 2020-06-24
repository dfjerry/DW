<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyStudent extends Model
{
    protected $table='surveystudent';
    public $fillable = [
        "student_name",
        "email",
        "telephone",
        "feedback"
    ];
}
