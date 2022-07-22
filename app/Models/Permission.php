<?php

namespace App\Models;

use Laratrust\Models\LaratrustPermission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends LaratrustPermission
{
    use HasFactory;
    use SoftDeletes;

    public $guarded = [];



    //User
    const user_create = 'user_create';

    //Post
    const post_create = 'post_create';
    const post_edit = 'post_edit';
    const post_index = 'post_index';

    //Author
    const author_create = 'author_create';
    const author_edit = 'author_edit';
    const author_index = 'author_index';
}
