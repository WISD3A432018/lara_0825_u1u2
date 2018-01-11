<?php

use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\FactoryasFaker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();


        $faker=Faker::create('zh_TW');



        $total = 20;
        foreach(range(1,20)as$number){
            Post::create([
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'is_feature'=>rand(0,1),
                'created_at'=>Carbon::now()->subDays($total-$number),
                'updated_at'=>Carbon::now()->subDays($total-$number),

            ]);
        }

    }
}
