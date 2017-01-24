<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class ContactController extends Controller
{
    public function postContactForm(Request $request){
        $rules = [
            'name' =>'required',
            'email'=>  'required|email',
            'text' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator){

        }
    }
}
