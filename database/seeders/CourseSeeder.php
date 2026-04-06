<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'prerequisites' => 'ITT107',
                'description' => 'Introduction to programming concepts including problem-solving, algorithms, variables, control structures, and basic application development.',
            ],
            [
                'code' => 'ITT200',
                'name' => 'Object Oriented Programming using C++',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Covers object-oriented programming principles such as classes, objects, inheritance, polymorphism, and encapsulation using C++.',
            ],
            [
                'code' => 'ITT210',
                'name' => 'Database Management Systems',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Introduction to database concepts including relational models, SQL, normalization, and database design and implementation.',
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communication & Networks I',
                'credits' => 3,
                'prerequisites' => 'ITT107',
                'description' => 'Fundamentals of data communication, networking concepts, protocols, and network architectures.',
            ],
            [
                'code' => 'ITT203',
                'name' => 'Data Structures and File Management I',
                'credits' => 3,
                'prerequisites' => 'ITT200',
                'description' => 'Study of data structures such as arrays, linked lists, stacks, and queues, along with file organization techniques.',
            ],
            [
                'code' => 'ITT302',
                'name' => 'Operating Systems',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Explores operating system concepts including process management, memory management, file systems, and system security.',
            ],
            [
                'code' => 'ITT318',
                'name' => 'Cloud Computing',
                'credits' => 3,
                'prerequisites' => 'ITT209 or ITT212',
                'description' => 'Introduction to cloud computing models, virtualization, cloud services, deployment models, and cloud security.',
            ],
            [
                'code' => 'ITT405',
                'name' => 'Human Computer Interaction and Interface Design',
                'credits' => 3,
                'prerequisites' => 'ITT310, PSY100',
                'description' => 'Focuses on designing user-friendly interfaces, usability principles, user experience (UX), and interaction design techniques.',
            ],
            [
                'code' => 'ITT419',
                'name' => 'Enterprise Application Development',
                'credits' => 3,
                'prerequisites' => 'ITT208, ITT210, ITT310',
                'description' => 'Development of large-scale enterprise applications using modern frameworks, design patterns, and integration techniques.',
            ],
            [
                'code' => 'ITT420',
                'name' => 'Mobile Application Development',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Covers the design and development of mobile applications, including user interfaces, mobile frameworks, and deployment.',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['code' => $course['code']], $course);
        }

        $this->command->info('10 IT courses seeded successfully.');
    }
}
