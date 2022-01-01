<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contents;
use App\Models\User;
use App\Models\debitCardUsers;
use App\Models\bkashUsers;
use App\Models\user_message;
use App\Models\Contributors;


class AdminController extends Controller
{
    public function addContent(){


        return view('admin.addContent');
    }

    public function uploadContent(Request $request){


        $contents=new contents;

        
       

        //Image

        $images=$request->file2;

        $imagename=time().'.'.$images->getClientoriginalExtension();

        $request->file2->move('images', $imagename);

        $contents->images=$imagename;

        $contents->contentTitle=$request->name;
        $contents->publishingDate=$request->date;
        $contents->author=$request->nameauth;
        $contents->featureType=$request->featureType;
        $contents->category=$request->category;
        $contents->contentText=$request->contentText;


        $contents->save();


        return redirect()->back()->with('message', 'Content added successfully');

    }

    public function showUsers(){

        $data=user::all();
        $data2=debitCardUsers::all();
        $data3=bkashUsers::all();


        return view('admin.manageUsers',compact('data','data2','data3'));
    }
    public function showContributor(){

        $data=Contributors::all();
        


        return view('admin.contributors',compact('data'));
    }
    public function showMessage(){

        $data=user_message::all();
      

        return view('admin.messages',compact('data'));
    }
    public function approved($id){

        $data=user::find($id);
        $data->subscriptionStatus='1';
        $data->save();


       return redirect()->back();
    }

    public function approved2($id){

        $data=debitCardUsers::find($id);
        $data->status='1';
        $data->save();


       return redirect()->back();
    }
    public function approved3($id){

        $data=bkashUsers::find($id);
        $data->status='1';
        $data->save();


       return redirect()->back();
    }
    public function cancel($id){

        $data=user::find($id);
        $data->subscriptionStatus='0';
        $data->save();


       return redirect()->back();
    }
    public function cancel2($id){

        $data=debitCardUsers::find($id);
        $data->status='0';
        $data->save();


       return redirect()->back();
    }
    public function cancel3($id){

        $data=bkashUsers::find($id);
        $data->status='0';
        $data->save();


       return redirect()->back();
    }
    public function delete($id){

        $data=contents::find($id);
        $data->delete();
        


       return redirect()->back();
    }

    public function update($id){

        $data=contents::find($id);


        return view('admin.updateContent',compact('data'));
    }

    
    public function edit(Request $request, $id){

        $data=contents::find($id);

        $data->contentTitle=$request->name;
        $data->publishingDate=$request->date;
        $data->author=$request->nameauth;
        $data->featureType=$request->featureType;
        $data->category=$request->category;
        $data->contentText=$request->contentText;

        $images=$request->file2;

        if($images)

        {

        $imagename=time().'.'.$images->getClientOriginalExtension();

        $request->file2->move('images', $imagename);

        $data->images=$imagename;
        }

        $data->save();


        return redirect()->back()->with('message', 'Content updated successfully');






        
    }

    public function showContent(){

        $data=contents::all();


        return view('admin.manageContent', compact('data'));
    }




}
