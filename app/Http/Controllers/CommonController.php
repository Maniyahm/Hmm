<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        try {
            $portfolios = Portfolio::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
        } catch (\Throwable $e) {
            $portfolios = collect();
        }

        return view('portfolio', compact('portfolios'));
    }

    public function service()
    {
        return view('service');
    }

    public function Careers()
    {
        return view('Careers');
    }
}
