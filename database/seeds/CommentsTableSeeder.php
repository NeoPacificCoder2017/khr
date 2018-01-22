<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Comments;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [];

        for($i = 0; $i < 10; $i++):
            $userID = rand(1, 10);
            $validated = rand(0, 2);
            $validatedBy = ($validated == 0)?0:1;

            $comments[] = [   
                'user_id' => $userID,
                'message' => str_random(10),
                'validated' => $validated,
                'validated_by' => $validatedBy,
            ];
        endfor;

        foreach($comments AS $comments):

            Comments::create($comments);
        endforeach;
    }
}