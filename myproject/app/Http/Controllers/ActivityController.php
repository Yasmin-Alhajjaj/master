<?php

namespace App\Http\Controllers;

use App\Category;
use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


        $user_id=Auth::id();

        if($user_id) {

           $this->validate($request, [
            'name'  => 'required',
            'description'  => 'required',
            'location'  => 'required',
            'time'  => 'required',
            // 'timeclose'  => 'required',
            'price'  => 'required',
            'image'=> 'required',
            'category_id' => 'required',
        ]);

        Activity::create([
            'name'=> $request->input('name'),
            'description'=> $request->input('des'),
            'location'=> $request->input('location'),
            'time'=> $request->input('time'),
            'price'=> $request->input('price'),
            'photo' => request()->image->store('uploads', 'public'),
            'category_id'=>$request->input('category_id'),
        ]);
        return back()->with('success', 'success record');
    }
        else {
            return back()->with('success', 'pleacse register or login');
        }

















        $request->validate([
            'name'  => 'required',
            'des'  => 'required',
            'location'  => 'required',
            'time'  => 'required',
            // 'timeclose'  => 'required',
            'price'  => 'required',
            'image'=> 'required',
            'category_id' => 'required',
        ]);

        // $this->validate($request, [
        //     'name'  => 'required',
        //     'description'  => 'required',
        //     'location'  => 'required',
        //     'time'  => 'required',
        //     // 'timeclose'  => 'required',
        //     'price'  => 'required',
        //     'image'=> 'required',
        //     'category_id' => 'required',
        // ]);

        Activity::create([
            'name'=> $request->input('name'),
            'description'=> $request->input('des'),
            'location'=> $request->input('location'),
            'time'=> $request->input('time'),
            'price'=> $request->input('price'),
            'photo' => request()->image->store('uploads', 'public'),
            'category_id'=>$request->input('category_id'),
        ]);
        return redirect()->route('category.index');

        // catch(QueryException $e) {

        // }
        // catch($e)
        //return view('Home.category');;
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
        $category_id=$id;
        $find=Category::findOrFail($category_id);
        // $activity=$find->activity()->get();
        $activity=$find->activity()->get();
        return view('Activities.activity',compact('activity'));
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
        //
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
    }
}
