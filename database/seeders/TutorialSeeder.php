<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tutorial;
use App\Models\Category;
use Ramsey\Uuid\Uuid;

class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tutorial = new Tutorial;
        $user_id = User::inRandomOrder()->first();
        $tutorial->user_id = $user_id->id;
        $category_id = Category::inRandomOrder()->first();
        $tutorial->category_id = $category_id->id;
        $tutorial->title = 'Judul 1';
        $tutorial->desc = 'Deskripsi 1 ';
        $tutorial->image = 'Gambar1 ';
       
        $tutorial->save();
    }
}
