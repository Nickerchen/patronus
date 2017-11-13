<?php

use Illuminate\Database\Seeder;
use Illuminate\SUpport\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();


    User::create(array(
      'name'  => 'username1',
      'email'     => 'foo@bar.com',
      'password'  => Hash::make("passwort")
    ));

    User::create(array(
      'name'  => 'username2',
      'email'     => 'foo2@bar.com',
      'password'  => Hash::make("passwort")
    ));

    User::create(array(
        'name'  => 'username3',
        'email'     => 'foo3@bar.com',
        'password'  => Hash::make("passwort")
    ));

    User::create(array(
        'name'  => 'username4',
        'email'     => 'foo4@bar.com',
        'password'  => Hash::make("passwort")
    ));

    }
}
