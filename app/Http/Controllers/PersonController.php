<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use DB;

class PersonController extends Controller {

    public function index(){

    	$persons = Person::all();
    	return response()->json($persons);

    }

    public function add(Request $request){

    	$person = new Person();
		$person->name = $request->input('name');
		$person->save();
		$person = Person::where("id",$person->id)->get();
        return response()->json($person[0]);

    }

    public function update(Request $request, $id){

    	$user = Person::find($id);
    	$user->name = $request->input('name');
    	$user->update();
		return response()->json($user);
    
    }

    public function delete($id){

    	$user = Person::find($id);
    	$user->delete();
    	return response()->json($user);

    }
}
