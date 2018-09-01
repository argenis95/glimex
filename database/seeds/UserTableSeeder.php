<?php
use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'John',
            'last_name' => 'Doe',
            'email'    => '123@example.com',
            'password' => Hash::make('12345'),
        ));
    }

}

?>