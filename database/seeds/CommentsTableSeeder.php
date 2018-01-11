<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\FactoryasFaker;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Comment::truncate();


        $faker= Faker::create('zh_TW');



        $total = 20;
        foreach(range(1,20) as $number){
            \App\Comment::create([
                'post_id'=>$number,
                'comment'=>$faker->paragraph,
                'created_at'=>Carbon::now()->subDays($total-$number),
                'updated_at'=>Carbon::now()->subDays($total-$number),
            ]);
        }
    }
}
