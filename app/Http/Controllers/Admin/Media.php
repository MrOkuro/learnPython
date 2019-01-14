<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'title', 'link_image', 'dimension',
    ];
}
