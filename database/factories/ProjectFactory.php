<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $fillable = [
        'title',
        'description',
        'color',
        'icon_name',

    ];

    public function definition()
    {
        return [
            //
        ];
    }
}
