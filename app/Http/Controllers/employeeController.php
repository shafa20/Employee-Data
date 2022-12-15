<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Stroage;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee=Employee::all();
        return view('index')->with('employee',$employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       

        if($request->hasFile("logo")){
            $file=$request->file("logo");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("logo/"),$imageName);

            $employee =new Employee([
                "country" =>$request->country,
                "name" =>$request->name,
                "address" =>$request->address,
                "phone" =>$request->phone,
                "fax" =>$request->fax,
                "email" =>$request->email,
                "url" =>$request->url,
                "date" =>$request->date,
                "logo" =>$imageName,
            ]);
            $employee->save();
           
        }

       
        return redirect("/");
            

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $employee=Employee::findOrFail($id);
        return view('edit')->with('employee',$employee);
    }

    public function view($id)
    {
        
        $employee=Employee::find($id);
        return view('viewpage',compact('employee'));
 
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    $employee=Employee::findOrFail($id);
     if($request->hasFile("logo")){
         if (File::exists("logo/".$employee->logo)) {
             File::delete("logo/".$employee->logo);
         }
         $file=$request->file("logo");
         $employee->logo=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/logo"),$employee->logo);
         $request['logo']=$employee->logo;
     }

     $employee->update([
            
            "country" =>$request->country,
            "name" =>$request->name,
            "address" =>$request->address,
            "phone" =>$request->phone,
            "fax" =>$request->fax,
            "email" =>$request->email,
            "url" =>$request->url,
            "date" =>$request->date,
            "logo" =>$employee->logo,
        ]);

      

        return redirect("/");

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         $employee=Employee::findOrFail($id);

         if (File::exists("logo/".$employee->logo)) {
             File::delete("logo/".$employee->logo);
         }
         
        
         $employee->delete();
         return back();


    }
}