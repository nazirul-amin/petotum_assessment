<?php

use Illuminate\Database\Seeder;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            [
                'phrase' => 'Pet parent dashboard',
                'style' => 'Arial',
                'color' => 'Black',
                'position' => 'C1'
            ],
            [
                'phrase' => 'Pet care dashboard',
                'style' => 'Arial',
                'color' => 'Black',
                'position' => 'B3'
            ],
            [
                'phrase' => 'petotum.com',
                'style' => 'Arial',
                'color' => 'Black',
                'position' => 'A2'
            ],
            [
                'phrase' => 'Provide Transparency',
                'style' => 'Arial',
                'color' => 'Black',
                'position' => 'D4'
            ],
            [
                'phrase' => 'Built Trust',
                'style' => 'Arial',
                'color' => 'Black',
                'position' => 'A4'
            ],
        ]);
    }
}
