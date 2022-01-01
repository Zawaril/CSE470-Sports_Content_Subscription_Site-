<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Contributors;

use App\Models\bkashUsers;

use App\Models\debitCardUsers;

use App\Models\user_message;



class HomeController extends Controller
{
    public function redirect(){


        if(Auth::id()){

            if(Auth::user()->type=='0'){

                return view('user.home');
            }
            else{

                return view('admin.home');



            }



        }
        else{

            return redirect()->back();
        }
    }




    public function index()
    {
        return view('newDashboard');



    }

    public function article1(){


        return view('user.article1');
    }
    public function article2(){


        return view('user.article2');
    }
    public function article3(){


        return view('user.article3');
    }




    public function showPayment(){


        return view('Subscribe');
    }

    public function showAbout(){


        return view('About');
    }

    public function showContact(){


        return view('Contact');
    }

    public function showContribute(){


        return view('contribute');
    }
    public function contributors(Request $request){


        
        $data = new Contributors;

        $data->fullName=$request->fullName;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->category=$request->category;
        $data->contentType=$request->contentType;
        $data->phoneNumber=$request->phoneNumber;
        $data->contentText=$request->contentText;

        $data->save();

        return redirect()->back()->with('message', 'Request Submitted Successfully.');


    }

    public function bkash(Request $request){


        
        $data = new bkashUsers;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->bNumber=$request->bNumber;
        $data->pin=$request->pin;
        $data->status='In Progress';
        $data->user_id=Auth::user()->id;

        $data->save();

        return redirect()->back()->with('message', 'Request Submitted Successfully.');


    }

    public function card(Request $request){


        
        $data = new debitCardUsers;

        
        $data->fName=$request->fName;
        $data->lName=$request->lName;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->cardNumber=$request->cardNumber;
        $data->postalCode=$request->postalCode;
        $data->securityCode=$request->securityCode;
        $data->expire_date=$request->expire_date;
        $data->status='In Progress';
        $data->user_id=Auth::user()->id;


        $data->save();

        return redirect()->back()->with('message', 'Request Submitted Successfully.');


    }

    public function message(Request $request){


        
        $data = new user_message;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        
        //$data->user_id=Auth::users()->id;

        $data->save();

        return redirect()->back()->with('message', 'Request Submitted Successfully.');


    }











    public function showPost(){


        return view('postDetails');
    }
    public function showBlog(){


        return view('blog');
    }
}
