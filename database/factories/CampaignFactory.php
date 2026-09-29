<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Campaign>
 */
class CampaignFactory extends Factory
{
    protected $model = Campaign::class;

    public function definition(): array
    {
        $title = fake()->sentence(4);

        return [
            "user_id" => User::factory(),
            "title" => $title,
            "slug" => Str::slug($title)."-".fake()->unique()->bothify("??###"),
            "story" => fake()->paragraphs(3, true),
            "creator_name" => fake()->name(),
            "creator_email" => fake()->unique()->safeEmail(),
            "category" => fake()->randomElement(["Business", "Community", "Education", "Health", "Creative", "Technology"]),
            "goal_amount" => fake()->numberBetween(1000, 100000),
            "raised_amount" => 0,
            "donor_count" => 0,
            "status" => "pending",
            "image_url" => null,
            "ends_at" => fake()->dateTimeBetween("+7 days", "+90 days")->format("Y-m-d"),
        ];
    }
}
