<?php

namespace App\Http\Controllers;

class AdmissionsController extends Controller
{
    public function index()
    {
        $requirements = [
            'Five (5) CXC/CSEC passes including English Language and Mathematics',
            'Two (2) CAPE passes or equivalent A-Level qualifications',
            'A pass in CSEC/CAPE Information Technology is strongly recommended',
            'Applicants with a relevant Associate degree may be considered for advanced entry',
        ];

        $documents = [
            'Certified copies of all academic certificates',
            'Two (2) recent passport-size photographs',
            'Valid government-issued photo ID or proof of citizenship',
            'Application fee receipt from the Bursary',
        ];

        $deadlines = [
            'Semester 1 (September intake)' => 'April 30 annually',
            'Semester 2 (January intake)'   => 'October 31 annually',
        ];

        return view('pages.admissions', compact('requirements', 'documents', 'deadlines'));
    }
}
