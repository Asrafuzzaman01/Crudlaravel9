<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;

class Crudcontroller extends Controller
{
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


