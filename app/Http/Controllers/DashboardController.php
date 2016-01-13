<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ObrasController;

class DashboardController extends Controller
{
    public function dashboard( Request $request )
    {
    	$obras = new ObrasController;
    	$obras = $obras->index( $request );
    	return view('dashboard', compact('obras'));
    }
}
