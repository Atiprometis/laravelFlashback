<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class aboutModel extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $fillable = ['fname', 'lname', 'nickname'];
}
