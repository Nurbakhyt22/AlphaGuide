<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.resumes' , ['resumes' => Resume::all()]);
    }
    public function ban(Resume $resume){
        $resume->update([
            'active' => true,
        ]);
//        dd($resume);
        return back();
    }

    public function unban(Resume $resume){
        $resume->update([
            'active' => false,
        ]);
        return back();
    }

    public function create()
    {
        return view('page.guide');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'surname'=>'required',
            'birthdate'=>'required|date',
            'email'=>'required',
            'experience'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2000000|dimensions:min_width=100,min_height,max_width=2000, max_height=2000'

        ]);
        $fileName = time().$request->file('img')->getClientOriginalName();
        $image_path = $request->file('img')->storeAs('resumes', $fileName, 'public');
        $validated['img'] = '/storage/'.$image_path;

        Auth::user()->resumes()->create($validated);

        return back()->with('message' , 'Your Resume send');
    }


    public function show(Resume $resume)
    {
        return view('resume.show',['resume'=>$resume, 'resumes'  => Resume::all()] );
    }

    public function edit(Resume $resume)
    {
        $resume->update([
            'active' => false,
        ]);
        return back();
    }


    public function update(Request $request ,Resume $resume){
        $resume->update([
            'active'=> true
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
