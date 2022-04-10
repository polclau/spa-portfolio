<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'color',
        'icon_name',
    ];

    public static function getAvailableTextColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );

        return $elements->texts;
    }

    public static function getAvailableIcons()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );

        return $elements->icons;
    }
}

