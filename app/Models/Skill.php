<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public static function getAvailableBackgroundColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/customization.json'))
        );

        return $elements->backgrounds;
    }
}
