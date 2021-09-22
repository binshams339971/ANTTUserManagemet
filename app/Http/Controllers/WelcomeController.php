<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    //Course Start
                      
    public function course()
    {
        return view('course.course');

    }
    public function basicarduino()
     {
         return view('course.basicarduino');

     }
     public function programmingkids()
      {
          return view('course.programmingkids');

      }
      public function scratchprograms()
       {
           return view('course.scratchprograms');

       }

      public function arduinowithtinkercad()
     {
         return view('course.arduinowithtinkercad');

     }
     
      public function basicrobotics()
     {
         return view('course.basicrobotics');

     }

      public function buildgames()
     {
         return view('course.buildgames');

     }

     public function soccerrobot()
     {
         return view('course.soccerrobot');

     }

     public function iotcar()
     {
         return view('course.iotcar');

     }
    //Course End

    //Shop Start
    public function shop()
    {
        return view('shop.shop');
    }
    public function edublock()
    {
        return view('shop.edublock');
    }
    public function schoolofiot()
    {
        return view('shop.schoolofiot');
    }

    //Press Release Start
    public function pressRelease()
    {
        return view('pressrelease.pressrelease');
    }
    public function press1()
    {
        return view('pressrelease.press1');
    }

    public function press2()
    {
        return view('pressrelease.press2');
    }

    public function press3()
    {
        return view('pressrelease.press3');
    }
    public function press4()
    {
        return view('pressrelease.press4');
    }

    //Solutin Page
    public function solution()
    {
        return view('solution');
    }

    
    public function termsAndConditions()
    {
        return view('conditions.termsandconditions');
    }
    public function refundPolicy()
    {
        return view('conditions.refundpolicy');
    }
    public function privacyPolicy()
    {
        return view('conditions.privacypolicy');
    }


}
