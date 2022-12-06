<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

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

    public function cache()
    {
        $query = Cache::remember("user_all", 10 * 60, function () {
            return User::all();
        });

        foreach ($query as $q) {
            echo "<li>{$q->name}</li>";
        }
    }

    public function getUser()
    {
        $query = User::all();
        foreach ($query as $q) {
            echo "<li>{$q->name}</li>";
        }
    }
}