<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['story_heading', 'location', 'details',
        'fk_user_id', 'image', 'status'];

    protected $table = 'story';
    protected $primaryKey = 'storyId';
    public $timestamps = 'false';
}
