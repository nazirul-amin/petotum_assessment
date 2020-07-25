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
                'position' => 'C1'
            ],
            [
                'phrase' => 'Pet care dashboard',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'B3'
            ],
            [
                'phrase' => 'petotum.com',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'A2'
            ],
            [
                'phrase' => 'Provide Transparency',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'D4'
            ],
            [
                'phrase' => 'Built Trust',
                'style' => 'Roboto',
                'color' => 'Black',
                'position' => 'A4'
            ],
        ]);
    }
}
