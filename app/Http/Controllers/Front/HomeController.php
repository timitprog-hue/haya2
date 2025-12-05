<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy, nanti bisa ganti ambil dari DB kalau mau
        $services = [
            [
                'slug' => 'web-development',
                'title_id' => 'Website & Web App',
                'title_en' => 'Websites & Web Apps',
                'description_id' => 'Pembuatan website company profile, landing page, dan aplikasi web.',
                'description_en' => 'Company profile websites, landing pages, and web applications.',
            ],
            [
                'slug' => 'automation',
                'title_id' => 'Otomasi & Integrasi IoT',
                'title_en' => 'Automation & IoT Integration',
                'description_id' => 'Integrasi mesin, sensor, dan dashboard monitoring.',
                'description_en' => 'Machine, sensor integration, and monitoring dashboards.',
            ],
        ];

        $projects = [
            [
                'name' => 'Finger Log App',
                'type' => 'Attendance System',
            ],
            [
                'name' => 'QC Label System',
                'type' => 'Production / Quality Control',
            ],
        ];

        return view('front.home', compact('services', 'projects'));
    }

    public function services()
    {
        return view('front.services');
    }

    public function projects()
    {
        return view('front.projects');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
