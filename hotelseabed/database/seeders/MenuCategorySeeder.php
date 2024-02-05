<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foodMenuCategories = array(
            "Appetizers" => array(
                "Cold Appetizers",
                "Hot Appetizers",
                "Shared Platters",
            ),
            "Soups and Salads" => array(
                "Soups",
                "Green Salads",
                "Specialty Salads",
            ),
            "Main Courses/Entrees" => array(
                "Poultry",
                "Sea-Food",
                "Meat",
                "Vegetarian",
            ),
            "Pasta and Risotto" => array(
                "Pasta Dishes",
                "Risotto Varieties",
            ),
            "Grill and Steaks" => array(
                "Grilled Meats",
                "Steaks and Chops",
            ),
            "Seafood" => array(
                "Fish Dishes",
                "Shellfish Specialties",
            ),
            "Vegetarian and Vegan" => array(
                "Vegetarian Dishes",
                "Vegan Options",
            ),
            "Sides and Accompaniments" => array(
                "Vegetables",
                "Potatoes and Grains",
                "Sauces and Condiments",
            ),
            "Desserts" => array(
                "Cakes and Pastries",
                "Ice Cream and Sorbet",
                "Fruit-Based Desserts",
            ),
            "Beverages" => array(
                "Non-Alcoholic Drinks",
                "Fresh Juices",
                "Specialty Drinks",
            ),
            "Wines" => array(
                "Red Wines",
                "White Wines",
                "Sparkling Wines",
            ),
            "Cocktails" => array(
                "Classic Cocktails",
                "Signature Cocktails",
            ),
            "Beer" => array(
                "Local Beers",
                "International Beers",
            ),
            "Coffee and Tea" => array(
                "Coffee Selections",
                "Tea Varieties",
            ),
            "Breakfast Menu" => array(
                "Egg Dishes",
                "Breakfast Specialties",
                "Beverages & Drinks",
            ),
            // "Specials or Chef's Recommendations" => array(),
            // "Kids Menu" => array(
            //     "Children-friendly Meals",
            // ),
            // "Happy Hour/Bar Bites" => array(
            //     "Discounted Drinks",
            //     "Bar Snacks",
            // ),
            // "Brunch (if applicable)" => array(
            //     "Brunch Items",
            // ),
            // "Allergen Information" => array(),
        );

        foreach ($foodMenuCategories as $categoryName => $foodItems) {
            $category = \App\Models\MenuCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($foodItems as $foodItem) {
                \App\Models\MenuCategory::create([
                    'name' => $foodItem,
                    'slug' => \Illuminate\Support\Str::slug($foodItem),
                    'parent_id' => $category->id,
                ]);
            }
        }
    }
}
