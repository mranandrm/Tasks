<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     return [
    //     'title' => $this->faker->sentence,
    //     'image' => 'https://source.unsplash.com/600x400/?nature,' . rand(1,100),
    //     'short_description' => $this->faker->paragraph,
    // ];
    // }
    public function definition(): array
    {
        // Get image from Unsplash
        $imageUrl = 'https://picsum.photos/600/400?random=' . rand(1, 1000);

        // Generate random file name
        $imageName = 'blogs/' . Str::random(20) . '.jpg';

        // Download and store image in storage/app/public/blogs/
        $imageContent = file_get_contents($imageUrl);
        Storage::disk('public')->put($imageName, $imageContent);

        return [
            'title' => $this->faker->sentence,
            'image' => 'storage/' . $imageName, // This will be used in asset() or <img src>
            'short_description' => $this->faker->paragraph,
        ];
    }
}
