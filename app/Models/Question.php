<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'answer',
        'is_image',
        'test_id',
    ];

    // protected $guarded = []; //TODO::use fillable

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
