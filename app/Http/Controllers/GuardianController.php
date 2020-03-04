<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuardianController extends Controller
{
    //
	public function index()
    {
		return view('guardian/guardian');
	}
	
	public function create()
    {
        //
		$students = DB::table('student')->get();
		return view('guardian/guardianCreate', ['students' => $students]);
    }
	
	public function store(Request $request)
    {
		
	}
	
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
