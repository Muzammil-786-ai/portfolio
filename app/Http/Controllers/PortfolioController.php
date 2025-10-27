<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'E-commerce Website',
                'desc' => 'Built using Laravel with Stripe integration and admin dashboard.',
                'image' => 'https://picsum.photos/400/250',
                'url'   => '#'
            ],
            [
                'title' => 'Portfolio Website',
                'desc' => 'Responsive personal portfolio with animations and light/dark mode.',
                'image' => 'https://picsum.photos/400/251',
                'url'   => '#'
            ],
            [
                'title' => 'Student Management System',
                'desc' => 'Full CRUD app with authentication and role management.',
                'image' => 'https://picsum.photos/400/252',
                'url'   => '#'
            ],
        ];

        return view('portfolio', compact('projects'));
    }

    // 🔹 Resume download
    public function downloadResume()
    {
        $filePath = public_path('resume.pdf'); // make sure file exists: public/resume.pdf

        if (file_exists($filePath)) {
            return Response::download($filePath, 'Muzammil_Resume.pdf', [
                'Content-Type' => 'application/pdf',
            ]);
        }

        return redirect()->back()->with('error', 'Resume file not found.');
    }
}
