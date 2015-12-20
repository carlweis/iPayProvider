<?php

use Illuminate\Database\Seeder;
use IPayProvider\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
          'name' => 'Matthew Seeger',
          'email' => 'officecall@gmail.com',
          'password' => bcrypt('seeger2k16#')
        ]);
    }
}
