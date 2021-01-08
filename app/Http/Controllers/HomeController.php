<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Service;


class HomeController extends Controller
{
    public function date ()
    {
        $date = Carbon::now();
    return   view('welcome', compact('date'));
    }


    /*public function about()
    {
        $name1 ='Flora';
        $name2= 'Joelle';
        $a = '2';
        $b = '3';
        $s = $a+$b;
        $services = Service::get();
        return view('about', compact('name1','name2','a', 'b', 's', 'services'));

    } 
    */

   

    public function service()
    {
        $services = Service::get();
        

       return view('services', compact('services',));
    
    }public function details()
    { 
        $services = Service::get();
        return view('about', compact('services',));
    }


}
