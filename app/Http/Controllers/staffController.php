<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\staff;
use Illuminate\Http\Request;
use Illuminate\Http\Facade\Input;
use DB;


class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = staff::all();
        //dd($staffs);
        return view('staff.stafflist')->with('staffs',$staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $validatedData = $request->validate([
            'fname'                   => 'required',
            'lname'                   => 'required',
            'phone'                   => 'required',
            'nextkin'                 => 'required',
            'email'                   => 'required',
            'street'                  => 'required',
            'city'                    => 'required',
            'state'                   => 'required',
            'zipcode'                 => 'required',
            'salary'                  => 'required',
            'skills'                  => 'required',
            'qualification'           => 'required',
            'gender'                  => 'required',
            'cover_image'             => 'image|nullable|max:1999',
        ]);

            //Handle file uploads
            if($request->hasFile('cover_image')){
            //Get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/storage',$fileNameToStore);
            } else {
            $fileNameToStore = 'noimage.jpg';
            }


            //dd($validatedData);
        $save = new staff();
        $save->fname                     = $request['fname'];
        $save->lname                     = $request['lname'];
        $save->phone                     = $request['phone'];
        $save->nextkin                   = $request['nextkin'];
        $save->email                     = $request['email'];
        $save->street                    = $request['street'];
        $save->city                      = $request['city'];
        $save->state                     = $request['state'];
        $save->zipcode                   = $request['zipcode'];
        $save->experience1               = $request['experience1'];
        $save->experience2               = $request['experience2'];
        $save->experience3               = $request['experience3'];
        $save->salary                    = $request['salary'];
        $save->skills                    = $request['skills'];
        $save->qualification             = $request['qualification'];
        $save->gender                    = $request['gender'];
        $save->cover_image               = $request['cover_image'];
        $save->save();

        if ($request->hasFile('cover_image')){

            $save->cover_image = $fileNameToStore;
        }


    if($save->save()){


        return redirect()->back();
    }

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
        //
        $staff = staff::find($id);

        //dd($staffs);
        //$staffs = staff::all();
        return view('staff.editstaff')->with('staff' ,$staff );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($request->all());
        $validatedData = $request->validate([
            
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'nextkin' => 'required',
            'email' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'salary' => 'required',
            'skills' => 'required',
            'qualification' => 'required',
            'gender' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle file uploads
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/image',$fileNameToStore);
        }else {
            $fileNameToStore = 'noimage.jpg';
        }


        //dd($validatedData);
        $save = staff::find($id);
        $save->fname                = $request['fname'];
        $save->lname                = $request['lname'];
        $save->phone                = $request['phone'];
        $save->nextkin              = $request['nextkin'];
        $save->email                = $request['email'];
        $save->street               = $request['street'];
        $save->city                 = $request['city'];
        $save->state                = $request['state'];
        $save->zipcode              = $request['zipcode'];
        $save->experience1          = $request['experience1'];
        $save->experience2          = $request['experience2'];
        $save->experience3          = $request['experience3'];
        $save->salary               = $request['salary'];
        $save->skills               = $request['skills'];
        $save->qualification        = $request['qualification'];
        $save->gender               = $request['gender'];
        


            if ($request->hasFile('cover_image')){

                $save->cover_image = $fileNameToStore;
            }


        if($save->save()){

            $staffs = staff::all();
        //dd($staffs);
            return view('staff.stafflist')->with('staffs',$staffs);
        }


    }


    public function attritedstaff($id)
    {
        
       
        return view('staff.attritedstaff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff = staff::findorfail($id)->delete();

        return redirect()->back();
    }

    
}
