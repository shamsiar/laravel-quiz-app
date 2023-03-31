<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'duration',
        'pass_mark',
        'number_of_questions',
        'description'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
