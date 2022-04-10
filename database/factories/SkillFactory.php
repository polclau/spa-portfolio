<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    protected $fillable = [
        'name',
        'color',

    ];

    public function definition()
    {
        $color = $this
            ->faker
            ->randomElement(Skill::getAvailableBackgroundColors());

        return [
            'name' => $this->faker->unique()->word(),
            'color' => $color,

        ];
    }
}
