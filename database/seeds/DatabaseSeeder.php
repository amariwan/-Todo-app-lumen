<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aland Mariwan',
            'email' => 'kontakt@aland-mariwan.de',
            'password' => Hash::make('alandmariwan')
        ]);
    }
}
