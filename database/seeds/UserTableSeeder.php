<?php

use Illuminate\Database\Seeder;
use App\User;

Class UserTableSeeder extends Seeder{

  public function run(){
    DB::table('users')->delete();
    User::create([
      'first_name' => 'Francesco',
      'last_name' => 'Pagnanelli',
      'slug' => 'Francesco-Pagnanelli',
      'email' => 'f.pagnanelli@gmail.com',
      'password' => \Hash::make('123456')
    ]);

    User::create([
      'first_name' => 'Roberto',
      'last_name' => 'Pagnanelli',
      'slug' => 'Roberto-Pagnanelli',
      'email' => 'robyteam@gmail.com',
      'password' => \Hash::make('123456')
    ]);

  }
}
