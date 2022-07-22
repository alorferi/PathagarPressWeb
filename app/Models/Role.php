<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends LaratrustRole
{
    use HasFactory;
    use SoftDeletes;

    public $guarded = [];

    const sa = 'sa';
    const ga = 'ga';
    const author = 'author';
}
