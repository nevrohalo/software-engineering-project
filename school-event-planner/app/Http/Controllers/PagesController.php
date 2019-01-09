<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function redirectToIndex() {
        $title = 'Index';
        return view('pages/index')->with('title', $title);
    }

    public function redirectToMainPage() {
        $title = 'Main';
        return view('pages/main')->with('title', $title);
    }

    public function redirectToEventPage() {
        $title = 'Event';
        return view('pages/event')->with('title', $title);
    }

    public function redirectToStudentPage() {
        $title = 'Student';
        return view('pages/student')->with('title', $title);
    }

    public function redirectToStudentPortal() {
        $title = 'Student Portal';
        return view('pages/student-portal')->with('title', $title);
    }

    public function redirectToOrganizerPage() {
        $title = 'Organizer';
        return view('pages/organizer')->with('title', $title);
    }

    public function redirectToOrganizerPortal() {
        $title = 'Organizer Portal';
        return view('pages/organizer-portal')->with('title', $title);
    }

    public function redirectToAboutUsPage() {
        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }
}