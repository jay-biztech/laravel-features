<?php

namespace App\Http\Controllers;

use App\Services\Calculator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Calculator $calculator)
    {	
    	return $calculator->sum(10, 20);
    }
}
