<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the courses table.
     * Run: php artisan db:seed
     */
    public function run(): void
    {
        $courses = [
            [
                'code'          => 'COMP1001',
                'name'          => 'Introduction to Computing',
                'credits'       => 3,
                'prerequisites' => 'None',
                'description'   => 'Fundamentals of computing including hardware components, software classification, operating system basics, and the history of information technology. No prior experience required.',
            ],
            [
                'code'          => 'COMP1010',
                'name'          => 'Programming I',
                'credits'       => 3,
                'prerequisites' => 'None',
                'description'   => 'Introduction to problem-solving and programming using Python. Topics include variables, data types, control structures, loops, functions, and basic file I/O.',
            ],
            [
                'code'          => 'COMP1020',
                'name'          => 'Computer Mathematics',
                'credits'       => 3,
                'prerequisites' => 'None',
                'description'   => 'Mathematical foundations for computing: number systems, Boolean algebra, logic gates, set theory, and introductory discrete mathematics.',
            ],
            [
                'code'          => 'COMP2010',
                'name'          => 'Programming II',
                'credits'       => 3,
                'prerequisites' => 'COMP1010',
                'description'   => 'Object-oriented programming concepts using Java. Covers classes, objects, inheritance, polymorphism, interfaces, exception handling, and collections.',
            ],
            [
                'code'          => 'COMP2020',
                'name'          => 'Data Structures and Algorithms',
                'credits'       => 3,
                'prerequisites' => 'COMP2010',
                'description'   => 'Study of fundamental data structures (arrays, linked lists, stacks, queues, trees, graphs) and algorithm design and analysis, including sorting and searching.',
            ],
            [
                'code'          => 'COMP2030',
                'name'          => 'Database Management Systems',
                'credits'       => 3,
                'prerequisites' => 'COMP1010',
                'description'   => 'Relational database concepts, entity-relationship modelling, normalisation, SQL (DDL and DML), stored procedures, and an introduction to database administration.',
            ],
            [
                'code'          => 'COMP3010',
                'name'          => 'Operating Systems',
                'credits'       => 3,
                'prerequisites' => 'COMP2010',
                'description'   => 'Principles of operating system design including process scheduling, memory management, file systems, concurrency, and virtualisation concepts.',
            ],
            [
                'code'          => 'COMP3020',
                'name'          => 'Computer Networking',
                'credits'       => 3,
                'prerequisites' => 'COMP2030',
                'description'   => 'Network architectures, OSI and TCP/IP models, IP addressing and subnetting, routing protocols, network security fundamentals, and wireless technologies.',
            ],
            [
                'code'          => 'COMP3030',
                'name'          => 'Web Application Development',
                'credits'       => 3,
                'prerequisites' => 'COMP2010, COMP2030',
                'description'   => 'Full-stack web development using HTML5, CSS3, JavaScript, PHP, and the Laravel framework. Covers MVC architecture, RESTful APIs, authentication, and deployment.',
            ],
            [
                'code'          => 'COMP4010',
                'name'          => 'Capstone Project',
                'credits'       => 6,
                'prerequisites' => 'COMP3030, COMP3020',
                'description'   => 'A supervised, industry-level software project developed over one semester. Students demonstrate integration of IT competencies, apply Agile methodology, and present to an industry panel.',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['code' => $course['code']], $course);
        }

        $this->command->info('10 IT courses seeded successfully.');
    }
}
