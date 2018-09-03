<?php
use Illuminate\Database\Seeder;
use App\User;


class User_TypesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('user_types')->insert([
            'id'     => '4',
            'name' => 'student',
        ]);
        
    }

}

?>