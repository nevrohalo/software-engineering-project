<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function redirectToIndex() {
        $data = array(
            'title' => 'Index',
            'identifier' => 'index'
        );
        return view('pages/index')->with($data);
    }

    public function redirectToMainPage() {
        $data = array(
            'title' => 'Main',
            'identifier' => 'main'
        );
        return view('pages/main')->with($data);
    }

    public function redirectToStudentPage() {
        $title = 'Student';
        return view('pages/student')->with('title', $title);
    }

    public function redirectToStudentPortal() {
        $data = array(
            'title' => 'Student Portal',
            'identifier' => 'portal-student'
        );
        return view('pages/student-portal')->with($data);
    }

    public function redirectToOrganizerPage() {
        $title = 'Organizer';
        return view('pages/organizer')->with('title', $title);
    }

    public function redirectToOrganizerPortal() {
        $data = array(
            'title' => 'Organizer Portal',
            'identifier' => 'portal-organizer'
        );
        return view('pages/organizer-portal')->with($data);
    }

    public function redirectToAboutUsPage() {
        $data = array(
            'title' => 'About Us',
            'identifier' => 'about'
        );
        return view('pages/about')->with($data);
    }
}