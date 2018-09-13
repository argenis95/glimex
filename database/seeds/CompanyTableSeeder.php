<?php
use Illuminate\Database\Seeder;
use App\User;


class CompanyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('companies')->insert([
            'name'     => 'Compañía 2',
        ]);
    }
}

?>