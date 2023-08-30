<?php

namespace App\Http\Controllers;
use App\Mail\WebkontraktorEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function __construct($data ){
    
        Mail::to($data['email'])->send(new WebkontraktorEmail($data));
		return "berhasil";
        
    }
}
