<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Answer;

class Quiz extends Model
{
    protected $table = 'quizzes';

    public function answer()
    {
        return $this->hasOne('App\answer','id', 'answer_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'categories_id');
    }
}
