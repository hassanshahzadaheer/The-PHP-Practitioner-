<?php
namespace App\controllers;


class PagesController
{

    public function home()
    {
      //die("home");
        return view('index');
    }

    public function about()
    {
      die("about");
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}
