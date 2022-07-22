<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment_author'=>  $this->faker->name(),
            'comment_content'=>  $this->faker->text(),
            'comment_post_id'=>  Post::factory(),
            'user_id'=>  User::factory(),
        ];
    }
}