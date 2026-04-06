<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $staff = [
            ['name' => 'Dr. Marcus Reid',     'role' => 'Head of Department',             'phone' => '+1-876-929-8987', 'email' => 'hod.it@ucc.edu.jm'],
            ['name' => 'Ms. Tamara Clarke',   'role' => 'Lecturer – Software Engineering', 'phone' => '+1-876-929-8988', 'email' => 't.clarke@ucc.edu.jm'],
            ['name' => 'Mr. Devon Campbell',  'role' => 'Lecturer – Networking',           'phone' => '+1-876-929-8989', 'email' => 'd.campbell@ucc.edu.jm', ],
            ['name' => 'Ms. Kezia Brown',     'role' => 'Lecturer – Cybersecurity',        'phone' => '+1-876-929-8990', 'email' => 'k.brown@ucc.edu.jm'],
            ['name' => 'Mr. Andre Williams',  'role' => 'Laboratory Technician',           'phone' => '+1-876-929-8991', 'email' => 'a.williams@ucc.edu.jm'],
            ['name' => 'Ms. Sophia Thompson', 'role' => 'Administrative Officer',          'phone' => '+1-876-929-8992', 'email' => 's.thompson@ucc.edu.jm'],
        ];
 
        foreach ($staff as $member) {
            Staff::updateOrInsert(
                ['email' => $member['email']], $member);
        }
 
        $this->command->info('6 staff members seeded successfully.');
    }
}
