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
        $categoria_pcs = new Category();
        $categoria_pcs->name = "PC gamer";
        $categoria_pcs->description = "PCs gamer";
        $categoria_pcs->save();

        $categoria_perifericos = new Category();
        $categoria_perifericos->name = "perifericos";
        $categoria_perifericos->description = "consigue increibles perifericos y hazlos parte de tu Setup";
        $categoria_pcs->save(); 
    
    }
}
