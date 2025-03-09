<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    /**
     * The attributes  that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'completed'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

     protected $cast = [
        'completed' => 'boolean'
     ];
}
