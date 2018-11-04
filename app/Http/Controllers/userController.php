<?php

namespace App\Http\Controllers;

class userController extends Controller
{

    public function nav()
    { 
      // echo "<script>alert('6666')</script>";
        return view('base.mobil.mcommon');
    }

     public function copyRight()
    { 
        return view('base.copyRight');
    }

     public function index()
    { 
        return view('user.index');
    }

     public function introduction()
    { 
        return view('user.introduction');
    }

     public function service()
    { 
        return view('user.service');
    }

     public function about()
    { 
        return view('user.about');
    }

     public function contact()
    { 
        return view('user.contact');
    }

   //mobil

      public function mabout()
    { 
        return view('user.mobil.mabout');
    }

      public function mcontact()
    { 
        return view('user.mobil.mcontact');
    }

      public function mindex()
    { 
        return view('user.mobil.mindex');
    }

      public function mintroduction()
    { 
        return view('user.mobil.mintroduction');
    }

      public function mservice()
    { 
        return view('user.mobil.mservice');
    }

      public function mboard()
    { 
        return view('user.mobil.mboard');
    }
}

