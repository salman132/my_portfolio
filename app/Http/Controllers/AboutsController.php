<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.abouts.about')->with('about',About::where('user_id',Auth::id())->first());
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
        $request->validate([
            'profession'=>'required',
            'about'=>'required',
            'experience'=> 'required|integer',
            'image'=>'required|image'
        ]);


        $about = new About();
        $about->user_id = Auth::id();
        $about->profession = $request->profession;
        $about->about_me = $request->about;
        $about->experience = $request->experience;



        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();


        $image->move('uploads/profile/',$image_new_name);

        $about->profile = 'uploads/profile/'.$image_new_name;

        $about->save();
        Session::flash('success','You filled up about form');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.abouts.show')->with('about',About::find($id));
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

        $request->validate([
            'profession'=>'required',
            'about'=>'required',
            'experience'=> 'required|integer',
            'image'=>'required|image'
        ]);


        $about = About::find($id);
        $about->user_id = Auth::id();
        $about->profession = $request->profession;
        $about->about_me = $request->about;
        $about->experince = $request->experience;


        if($request->hasFile('image')){

           if(file_exists($about->profile)){
               unlink($about->profile);
           }

            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();


            $image->move('uploads/profile/',$image_new_name);

            $about->profile = 'uploads/profile/'.$image_new_name;
        }

        $about->save();
        Session::flash('success','You have updated the data');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get_photo = About::where('id',$id)->first();
        if(file_exists($get_photo)){
            unlink($get_photo->profile);
        }
        About::destroy($id);
        Session::flash('success','You deleted the data');
        return redirect()->back();
    }
}
