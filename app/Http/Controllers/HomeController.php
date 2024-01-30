<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Student;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public  function upload(Request $request)
    {              
        $student = new student;   //database name
         
        //table_column_name       // form name="name"
        $student-> name=$request->name;
        $student-> email=$request->email;
       
        $image=$request->file;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();   //for unique image name
            $request->file->move('student',$imagename);
                            // public -> student folder for contains all image which is isert by user.
            $student->image=$imagename;
        }

        $student->save();
        return redirect()->back();
    }


    public function view()
    { 
              //table_name
        $data=student::all();

        return view('display', compact('data'));
    }


    public function delete($id)
    {
        $data= student::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {           //form name="search"
       $search=$request-> search;
      // $data= student::where('name','Like','%'.$search.'%')->get();
            //table name      //table column name through which we want to search 

        $data= student::where('name','Like','%'.$search.'%')->orWhere('email','Like','%'.$search.'%')->get();    
       return view('display',compact('data'));
                   //display.blade.php
    }

    public function update_view($id)
    {
        $student= student::find($id);
        return view('update_page', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student=student::find($id);
        $student->name=$request->name;
                             //update_page.php name="name"
        $student->email=$request->email; 

        $image=$request->file;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();   //for unique image name
            $request->file->move('student',$imagename);
                            // public -> student folder for contains all image which is isert by user.
            $student->image=$imagename;
        }

        $student->save();
        return redirect()->back();
    }
}

