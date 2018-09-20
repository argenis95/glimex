<?php
use Illuminate\Database\Seeder;
use App\Course;


class CourseTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('courses')->insert([
            'name'     => 'Grupo 1',
            'company_id' => '9',
        ]);
    }

}

?>