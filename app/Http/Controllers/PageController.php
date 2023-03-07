<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        $this->data['title'] = 'McSmart App - Daily knowledge to make you smarter';
        $this->data['lang'] = 'en';

        return view('pages.public.home', $this->data);
    }

    public function privacy()
    {
        app()->setLocale('en');
        $this->data['title'] = 'McSmart App | Privacy';
        $this->data['lang'] = 'en';

        return view('pages.public.privacy', $this->data);
    }

    public function terms()
    {
        app()->setLocale('en');
        $this->data['title'] = 'McSmart App | Terms Of Use';
        $this->data['lang'] = 'en';

        return view('pages.public.term', $this->data);
    }

    public function contact()
    {
        app()->setLocale('en');
        $this->data['title'] = 'McSmart App | Contact Us';
        $this->data['lang'] = 'en';

        return view('pages.public.contact', $this->data);
    }
}
