<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Input;
use Session;
use Auth;
use Twitter;
use Cache;
use File;
use Validator;
use Carbon\Carbon;
use DB;
class IndexController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        return view('index',array());
    }

}
