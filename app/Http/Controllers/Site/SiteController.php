<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Product;
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

    public function categoriesIndex()
    {
        $categories = Category::active()->ordered()->get();

        return view('site.pages.categories', compact('categories'));
    }

    public function productsIndex()
    {
        $products = Product::active()->with('category')->get();
        $categories = Category::active()->ordered()->get();

        return view('site.pages.products', compact('products', 'categories'));
    }

    public function productsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->active()->first();
        
        if (!$category) {
            abort(404);
        }

        $products = Product::active()->where('category_id', $category->id)->with('category')->get();
        $categories = Category::active()->ordered()->get();

        return view('site.pages.products_by_category', compact('products', 'category', 'categories'));
    }
}
