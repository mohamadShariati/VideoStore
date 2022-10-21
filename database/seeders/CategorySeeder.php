<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            'ورزشی'=>[
                'slug'=>'sport',
                'icon'=>'fa fa-futbal-o'
            ],
            'سینما'=>[
                'slug'=>'cinema',
                'icon'=>'fa fa-film'
            ],
            'طنز'=>[
                'slug'=>'fun',
                'icon'=>'fa fa-smile-o'
            ]
        ];
        foreach ($categories as $categoryName => $details) {
            category::create([
                'name'=>$categoryName,
                'slug'=>$details['slug'],
                'icon'=>$details['icon']
            ]);
        }
    }
}
