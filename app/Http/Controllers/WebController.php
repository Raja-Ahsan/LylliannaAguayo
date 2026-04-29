<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function Index()
    {
        $page_title = 'Lyllianna Aguayo — Volleyball Recruitment Portfolio';

        return view('website.index', compact('page_title'));
    }

    public function Services()
    {
        $page_title = 'Cleaning Services | Phoenix Neat Space Cleaning';

        return view('website.services', compact('page_title'));
    }
    public function AboutUs()
    {
        $page_title = 'About Us | Phoenix Neat Space Cleaning';

        return view('website.about', compact('page_title'));
    }

    public function Industries()
    {
        $page_title = 'Industries Served | Phoenix Neat Space Cleaning';

        return view('website.industries', compact('page_title'));
    }


    public function Pricing()
    {
        $page_title = 'Pricing & Quotes | Phoenix Neat Space Cleaning';

        return view('website.pricing', compact('page_title'));
    }

    public function Careers()
    {
        $page_title = 'Careers | Phoenix Neat Space Cleaning';

        return view('website.careers', compact('page_title'));
    }

    public function ContactUs()
    {
        $page_title = 'Contact Us | Phoenix Neat Space Cleaning';

        return view('website.contact', compact('page_title'));
    }
}
