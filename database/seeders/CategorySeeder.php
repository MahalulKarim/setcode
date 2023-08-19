<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category = new Category;        
        $category->name = 'Kategory 1';       
        $category->icon = 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Devicon-html5-plain.svg/640px-Devicon-html5-plain.svg.png';       
        $category->save();
    }
}
