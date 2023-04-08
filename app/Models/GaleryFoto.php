<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleryFoto extends Model
{
    use HasFactory;
    protected $fillable = ['group_media_id','name','link_img','link_tumb'];
}
