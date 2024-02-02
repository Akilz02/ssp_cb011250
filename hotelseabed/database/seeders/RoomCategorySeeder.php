<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room_categories = [
        "Standard Room",
        "Deluxe Room",
        "Suite",
        "Family Room",
        "Smoking Room",
        "Non-Smoking Room",
        "Honeymoon Suite",
        "Penthouse Suite",
        ];

        foreach ($room_categories as $room_category) {
            \App\Models\RoomCategory::factory()->create([
                'name' => $room_category,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'price' => rand(100, 1000),
                'image' => 'https://via.placeholder.com/150',
                'category_id' => rand(100, 1000),
                'parent_id' => null,
                'status' => true,
                'slug' => \Illuminate\Support\Str::slug($room_category),
            ]);
        }
    }
}
