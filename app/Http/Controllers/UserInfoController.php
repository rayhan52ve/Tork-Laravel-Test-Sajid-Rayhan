<?php

namespace App\Http\Controllers;

use App\Models\User_info;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_info = User_info::get()->all();
        return view('Dashboard.modules.user_info.index',compact('user_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.modules.user_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                    'name'=>'required|max:15|min:2|string',
                    'email' =>'required|email',
                    'other_info'=>'required|max:500|min:5|string',
                ],
                    $message=[

                              'email.email' => 'Please provide a valid email.',

                             ]
            );
        
        
        
                User_info::create($request->all());
                session()->flash('msg','Event Created Successfully');
                session()->flash('cls','success');
                return redirect()->route('user-info.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User_info $user_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_info $user_info)
    {
        return view('Dashboard.modules.user_info.edit',compact('user_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_info $user_info)
    {
        $user_info->update($request->all());
        session()->flash('msg','User Info Updated Successfully');
        session()->flash('cls','success');
        return redirect()->route('user-info.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_info $user_info)
    {
        $user_info->delete();
        session()->flash('msg','User Info Deleted Successfully');
        session()->flash('cls','danger');
        return redirect()->back();
    }
}
