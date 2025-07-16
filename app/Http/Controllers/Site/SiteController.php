<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.pages.home');
    }

    public function pageShow($slug)
    {
        $page = Page::where('slug', $slug)->first();

        return view('examples.pages_show', compact('page'));
    }

    public function serviceShow($slug)
    {
        $service = Service::where('slug', $slug)->first();

        return view('examples.services_show', compact('service'));
    }

    public function portfolioShow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();

        return view('examples.portfolios_show', compact('portfolio'));
    }
}
