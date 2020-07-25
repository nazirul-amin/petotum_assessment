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
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'C1',
                'background' => '#848ccf'
            ],
            [
                'phrase' => 'Pet care dashboard',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'B3',
                'background' => '#be5683'
            ],
            [
                'phrase' => 'petotum.com',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'A2',
                'background' => '#cbeaed'
            ],
            [
                'phrase' => 'Provide Transparency',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'D4',
                'background' => '#ffe0f7'
            ],
            [
                'phrase' => 'Built Trust',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'A4',
                'background' => '#f9d56e'
            ],
        ]);
    }
}
