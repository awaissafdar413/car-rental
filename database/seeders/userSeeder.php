<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=
        collect([
       [
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>'admin',
        'role'=>'2'
       ],
       [
        'name'=>'user',
        'email'=>'user@gmail.com',
        'password'=>'user',
        'role'=>'1' 
       ],
    ]);
    $data->each(function($dat){
        User::insert($dat);
    });
        // brand::create($data);
    }
}
