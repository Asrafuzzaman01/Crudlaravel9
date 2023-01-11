<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use App\Models\User;

 
use Session;

class Crudcontroller extends Controller
{

    public function login(){
        return view('login');


    }









    public function registration(){
        return view('registration');

    }


    public function registerUser( Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required| email |unique:users',
            
            'password'=>'required|min:6|max:12',



        ]);

        $user= new User();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=($request->password);
        $result=$user->save();


        
        if ($result) {
           // return back()->with('success','You have Registered Successfuly');
            return redirect('login');



        } else {

            return back()->with('fail','something Rong ');
            
        };
       
        




    }


    //LOgin /////////
    public function userLogin( Request $request){

        $request->validate([
           
            'email'=>'required| email',
            'password'=>'required|min:6|max:12'
        ]);
        $user= User::Where('email' , $request->email  )->first();
       // print_r($user);exit;

        if ($user) {
            if ($request->password == $user->password) {

                $request->session()->put('loginId' , $user->id);
                return redirect('show-data');

                
            }

            else {
                return back()->with('fail','Your Password is Invalid!! ');
            }


           
        }
        else{
            return back()->with('fail','Your Email Invalid ');
            
        }

    }


    //LOGOUT ....

    public function logOut(){
        if (Session::has('loginId')) {
            Session::pull('loginId');

            return redirect ('login');
        }
  

    }






// Show-Data.......

    public function showdata(){

        



       $showData= Crud::all();

  return view('show-Data', compact('showData'));

    }




    public function addData(){
        return view('add-data');

    }

    //add data
    public function storeData( Request $request){
        


        $formvalidation=[

           'name'=>'required|max:30',
           'email'=>'required|max:40',
           'phone'=>'required|max:11',
           'address'=>'required|max:300',


        ];
        $this->validate($request,$formvalidation);

        $crud= new crud();

        $crud->name= $request->name;
        $crud-> email= $request->email;
        $crud->phone= $request->phone;
        $crud->address= $request->address;
        
        $crud->save();
            Session::flash('msg','Data successfully Added');
        

       
             return redirect('/show-data');

    }


    //Edite Data
    public function editeData($id=null){

        $editedata=crud::find($id);

        return view('edite-data', compact('editedata'));

    }


    //update data

public function updateData( Request $request ,$id){
        


    $formvalidation=[

       'name'=>'required|max:30',
       'email'=>'required|max:40',
       'phone'=>'required|max:11',
       'address'=>'required|max:300',


    ];
    $this->validate($request,$formvalidation);

$crud= crud:: find($id);

$crud->name= $request->name;
$crud-> email= $request->email;
$crud->phone= $request->phone;
$crud->address= $request->address;

$crud->save();
Session::flash('msg','Data successfully Update');


   
return redirect('/show-data');

}

public function deleteData($id=null){

    $deletedata= crud::find($id);
    $deletedata->delete();
    Session::flash('msg','Data successfully Delete');


   
return redirect('/show-data');


}




}


