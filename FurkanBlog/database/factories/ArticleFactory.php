<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'content' => $this->faker->sentence(5,20),
            
        ];
    }
}
