<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    use HasFactory;

    protected $table = 'campaigne';

    protected $fillable = [
        'name',
        'title',
        'story',
        'begin',
        'end',
        'target',
        'earned',
    ];
}
