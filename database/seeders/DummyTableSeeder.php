<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DummmyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('dummies')->insert([
            'name'=>'Ali',
            'contact'=>'0125344789',
        ]);
        \DB::table('dummies')->insert([
            'name'=>'Abu',
            'contact'=>'0138956432',
        ]);
        \DB::table('dummies')->insert([
            'name'=>'Siti',
            'contact'=>'0199151162',
        ]);
        \DB::table('dummies')->insert([
            'name'=>'Sara',
            'contact'=>'0166678903',
        ]);
    }
}
