<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use softDeletes;

    protected $table = 'todos';

    protected $fillable = [
        'content',
    ];
}
