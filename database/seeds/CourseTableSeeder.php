<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'id'             => 1,
                'title'          => 'Full-Stack web Development',
                'description'    => 'This a complete full-stack web development for absolute beginners by Laravel php framework',
                'created_at'      => now(),
                'author_id'      => '1',
            ],
            [
                'id'             => 2,
                'title'          => 'Front End web Development',
                'description'    => 'This a complete Front End web development for absolute beginners',
                'created_at'      => now(),
                'author_id'      => '2',
            ],
        ];

        Course::insert($courses);

        factory(Course::class, 5)->create();
        
    }
}
