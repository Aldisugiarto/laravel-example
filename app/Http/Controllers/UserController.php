<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('insert into schedules (name, last_modified) values (?, ?)', ['Aldi', date('Y-m-d H:i:s')]);
 
        // return view('user.index', ['users' => $users]);
    }
}