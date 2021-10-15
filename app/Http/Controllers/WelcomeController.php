<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsModel;

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
    public function edublockdigitalmanual()
    {
        return view('shop.edublockdigitalmanual');
    }
    public function edublockdigitalmanualBook()
    {
        return view('shop.edublockdigitalmanualbook');
    }
    public function apkDownload()
    {
        $file_path = public_path('assets/files/edubot-v2.0.0.apk');
        return response()->download($file_path);
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

    //Solution Page
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

    //Footer Content Starts
    public function aboutus()
    {
        return view('footer-content.aboutus');
    }
    public function team()
    {
        return view('footer-content.team');
    }
    public function comunity()
    {
        return view('footer-content.comunity');
    }
    public function career()
    {
        return view('footer-content.career');
    }
    public function faq()
    {
        return view('footer-content.faq');
    }
    public function LmsFaq()
    {
        return view('footer-content.lmsfaq');
    }
    public function partnership()
    {
        return view('footer-content.partnership');
    }
    public function partnershipSave(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:16' ,
            'email'=>'required|email',
            'phone'=>'required|min:11|max:11',
            'organization'=>'required|min:3|max:52',
            'message'=>'required|min:5|max:256',
        ]);
        $contact = new ContactUsModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->organization = $request->organization;
        $contact->message = $request->message;
        $contact->save();
        $request->session()->put('success11', "1");
        return redirect()->route('partnership');

    }

    public function new1()
    {
        return view('newdashboard');
    }

    public function new2()
    {
        return view('newdashboard2');
    }

}
