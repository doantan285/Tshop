<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',         // Thuộc tính 'name' được phép mass assignment
        'parent_id',    // Thuộc tính 'parent_id' được phép mass assignment
        'slug'
        // Các thuộc tính mà cho phép mass assignment
    ];
}
