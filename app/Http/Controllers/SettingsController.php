<?php

namespace App\Http\Controllers;

use App\Category;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
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
        $settings = Settings::all();

        return view("admin.settings")
            ->with('settings',$settings)
            ->with('categories',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'category'=>'required|max:60'
        ]);
        $category = new Category();
        $category->user_id = Auth::id();
        $category->name = $request->category;
        $category->save();

        Session::flash('success','You created a category');
        return redirect()->back();
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
           'logo'=>'required|image',
           'phone'=>'required',
           'address'=> 'required'
        ]);

       $settings = new Settings();

       $settings->user_id = Auth::id();

       $logo = $request->logo;
       $logo_new_name = time().$logo->getClientOriginalName();


       $logo->move('uploads/logo/',$logo_new_name);

       $settings->logo= 'uploads/logo/'.$logo_new_name;
       $settings->phone = $request->phone;
       $settings->address = $request->address;
       $settings->save();
       Session::flash('success','You have change the settings');
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
        $settings = Settings::find($id);

        $settings->user_id = Auth::id();

        if($request->hasFile('logo')){

            if(file_exists($settings->logo)){
                unlink($settings->logo);
            }
            $logo = $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logo/',$logo_new_name);
            $settings->logo = 'uploads/logo/'.$logo_new_name;
        }

        $settings->phone = $request->phone;
        $settings->address = $request->address;
        $settings->save();

        Session::flash('success','You Updated Settings');

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
        Category::destroy($id);
        Session::flash('success','You deleted a Category');
        return redirect()->back();
    }
}
