<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IslandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $islands = [];

        DB::table('islands')->insert([
            'name' => str_random(10),
        ]);

    //     for($i = 0 ; $i < 10 ; $i++) :
    //         $userId = rand(1, 10);
    //         $validated = rand(0, 2);
    //         $validatedBy =($validated == 0)?0:1;


    //         $islands[] = [
    //             'name' => $userId,
    //             'message' => str_random(10),
    //             'validated' => $validated,
    //             'validated_by' => $validatedBy,
    //         ];
    //     endfor;


    //     foreach($messages AS $message) :

    //         Message::create($message);
    //         DB::table('messages')->insert($message);
    //         endforeach;
     }
}
