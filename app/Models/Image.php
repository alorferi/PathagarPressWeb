<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the parent imageable model (user or post).
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    public function imageName()
    {
        return $this->id.".png";
    }

    public static function ImagePath($image_name=null)
    {
        $path = storage_path("app/public/images");

        if($image_name){
            $path .= "/$image_name";
        }

        return $path;
    }

    public static function ImageUrl($image_name)
    {
        return "/images/$image_name";
    }
}
