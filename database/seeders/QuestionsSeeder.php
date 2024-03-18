<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('questions')->delete();

        \DB::table('questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'questions' => "I find it difficult finishing a task or project",
                'type' => 'adhd',
                'value' => '5',
            ),
            1 =>
            array (
                'id' => 2,
                'question' => "If a task or project requires a lot of thought I will often delay in getting it started",
                'type' => 'adhd',
                'value' => '5',
            ),
            2 =>
            array (
                'id' => 3,
                'question' => "I find it difficult to sit still and often fidget or squirm",
                'type' => 'adhd',
                'value' => '5',
            ),
            3 =>
            array (
                'id' => 4,
                'question' => "I find it hard to remain focused in group settings",
                'type' => 'adhd',
                'value' => '5',
            ),
            4 =>
            array (
                'id' => 5,
                'question' =>"My mind feels very cluttered and it is hard for me to concentrate on one thing at a time",
                'type' => 'adhd',
                'value' => '5',
            ),
            5 =>
            array (
                'id' => 6,
                'question' => "I make decisions quickly and fail to think through the consequences",
                'type' => 'adhd',
                'value' => '5',
            ),
            6 =>
            array (
                'id' => 7,
                'question' =>  "I am often irritable, with a short fuse",
                'type' => 'adhd',
                'value' => '5',
            ),
            7 =>
            array (
                'id' => 8,
                'question' => "I have mood swings, sometimes feeling quite high, other times low",
                'type' => 'adhd',
                'value' => '5',
            ),
            8 =>
            array (
                'id' => 9,
                'question' => "I often miss what is being said to me in conversations",
                'type' => 'adhd',
                'value' => '5',
            ),
        ));


    }
}
