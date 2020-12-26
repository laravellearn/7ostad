<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'target_id',
        'student_id',
        'user_id',
        'day',
        'date',
        'operation_id1',
        'book_id1',
        'topic_id1',
        'operation_id2',
        'book_id2',
        'topic_id2',
        'operation_id3',
        'book_id3',
        'topic_id3',
        'operation_id4',
        'book_id4',
        'topic_id4',
        'operation_id5',
        'book_id5',
        'topic_id5',
        'operation_id6',
        'book_id6',
        'topic_id6',
        'operation_id7',
        'book_id7',
        'topic_id7',
        'operation_id8',
        'book_id8',
        'topic_id8',
    ];
}
