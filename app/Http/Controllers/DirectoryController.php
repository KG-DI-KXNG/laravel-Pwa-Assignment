<?php

namespace App\Http\Controllers;

class DirectoryController extends Controller
{
    /**
     * All staff are stored here. In a larger app this would
     * be a Staff Eloquent model backed by a database table.
     */
    private array $staff = [
        [
            'name'     => 'Dr. Marcus Reid',
            'role'     => 'Head of Department',
            'phone'    => '+1-876-929-8987',
            'email'    => 'hod.it@ucc.edu.jm',
            'photo'    => null,   // place image in public/images/staff/
            'initials' => 'MR',
        ],
        [
            'name'     => 'Ms. Tamara Clarke',
            'role'     => 'Lecturer – Software Engineering',
            'phone'    => '+1-876-929-8988',
            'email'    => 't.clarke@ucc.edu.jm',
            'photo'    => null,
            'initials' => 'TC',
        ],
        [
            'name'     => 'Mr. Devon Campbell',
            'role'     => 'Lecturer – Networking',
            'phone'    => '+1-876-929-8989',
            'email'    => 'd.campbell@ucc.edu.jm',
            'photo'    => null,
            'initials' => 'DC',
        ],
        [
            'name'     => 'Ms. Kezia Brown',
            'role'     => 'Lecturer – Cybersecurity',
            'phone'    => '+1-876-929-8990',
            'email'    => 'k.brown@ucc.edu.jm',
            'photo'    => null,
            'initials' => 'KB',
        ],
        [
            'name'     => 'Mr. Andre Williams',
            'role'     => 'Laboratory Technician',
            'phone'    => '+1-876-929-8991',
            'email'    => 'a.williams@ucc.edu.jm',
            'photo'    => null,
            'initials' => 'AW',
        ],
        [
            'name'     => 'Ms. Sophia Thompson',
            'role'     => 'Administrative Officer',
            'phone'    => '+1-876-929-8992',
            'email'    => 's.thompson@ucc.edu.jm',
            'photo'    => null,
            'initials' => 'ST',
        ],
    ];

    public function index()
    {
        return view('pages.directory', ['staff' => $this->staff]);
    }
}
