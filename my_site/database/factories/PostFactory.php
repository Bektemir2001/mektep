<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            "name"=>$this->faker->userName(),
            "last_name"=>$this->faker->lastName(),
            "age"=>random_int(20, 30),
            "content"=>$this->faker->text(),
            "is_published"=>random_int(0, 1),
            "category_id"=>random_int(1, 4)
        ];
    }
}
