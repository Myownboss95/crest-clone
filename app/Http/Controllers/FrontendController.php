<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Settings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public $theme;
    public function __construct()
    {
        $this->theme = config('app.theme', 'front2');
    }
    public function home()
    {
        $setting = Settings::first();
        $plans = Plan::with('features')->latest()->get();
        return view("$this->theme.home", [
            'setting' => $setting,
            'plans' => $plans
        ]);
    }

    public function about()
    {
        return view("$this->theme.about-us");
    }


    public function contact()
    {
        return view("$this->theme.contact");
    }

    public function terms_and_conditions()
    {
        return view("$this->theme.terms-and-conditions");
    }

    public function faqs()
    {
        return view("$this->theme.faqs");
    }
}
