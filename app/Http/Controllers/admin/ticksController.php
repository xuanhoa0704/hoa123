<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use Illuminate\Http\Request;

class ticksController extends Controller
{
    function index(){
        $tickets = ticket::get();
        return view('admin.addtic.detailaddtic',['tickets'=>$tickets]);
    }
}
