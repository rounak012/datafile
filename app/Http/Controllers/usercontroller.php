<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\employee;
use DB;
use Session;
use Input;
use App\department;
class usercontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login(Request $request)
	
	{ 
	    $var=DB::table('employees')->where('username','=',$request->username)->first();
		if ($var==null)
		{
			return "sorry you dont have account";
		}
		else if ($var->password==$request->password)
		{    Session::put('user',$var);
			if ($var->roleid=='1')
			{   
		         $dept=department::all();
		
				return view ("adminpage",compact('dept'));
			}
			else 
			{
				return view ("employeepage");
			}
		}
		else
			return ("wrong password dude:");
		
		
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function adminpost(Request $request)
	{
		$image=new employee;
		$image->username=$request->username;
		$image->password=$request->password;
		$image->roleid=$request->roleid;
		$image->departid=$request->department;
		
	
		$image->save();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function logout()
	{
		Session::flush();
		return view('login');
	}
	
	public function showall(Request $request)
	{
		$var=DB::table('employees')->where('roleid','=','2')->get();
	
		
		return view('displayemployee',compact('var'));
	}
	public function updatecall(Request $request)
	{   
	   
	    $id=$request->id;
	   
		DB::table('employees')->where('id',$id)->update(['username' => $request->username]);
		
		
              DB::table('employees')->where('id',$id)->update(['roleid' => $request->roleid]);

		
		 return redirect()->route('showall');
	}
	public function updateparticular(Request $request)
	{    $id=$request->id;
		
		 $var=DB::table('employees')->where('id','=',$id)->first();
	     return view ('updateform1',compact('var'));
		  
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
