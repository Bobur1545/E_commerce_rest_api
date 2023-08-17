<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Office',
                'ru' => 'Офис',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Game',
                'ru' => 'Игра',
            ],
        ]);





        $category = Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Office',
                'ru' => 'Офис',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Uy',
                'ru' => 'Дом',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Oshxona',
                'ru' => 'кухня',
            ],
        ]);





        $category = Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Office',
                'ru' => 'Офис',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Plyaj',
                'ru' => 'Пляж',
            ],
        ]);
        $childCategory = $category->childCategories()->create([
            'name' => [
                'uz' => 'Uy',
                'ru' => 'Дом',
            ],
        ]);
        $childCategory->childCategories()->create([
            'name' => [
                'uz' => 'Prujinali',
                'ru' => 'пружина',
            ],
        ]);
        $childCategory->childCategories()->create([
            'name' => [
                'uz' => 'Matrasli',
                'ru' => 'С матрасом',
            ],
        ]);





        $category =  Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать',
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Office',
                'ru' => 'Офис',
            ],
        ]);

        $childCategory = $category->childCategories()->create([
            'name' => [
                'uz' => 'Uy',
                'ru' => 'Дом',
            ],
        ]);






        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул',
            ],
        ]);
    }
}
