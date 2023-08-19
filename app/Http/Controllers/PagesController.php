<?php

namespace App\Http\Controllers;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //

    public function index()
    {

        // // $shares = DB::table('tutorials AS t')
        // // ->join('users', 'users.id', '=', 't.user_id')
        // // ->join('categories', 'id', '=', 't.category_id')
        // // // ->where('t.id', '=', t.)
        // // ->get();    
        // // dd($shares);

        // $donationRuns = Tutorial::with('categories') 
        // // ->where('is_published',1)
        // // ->whereNot('is_completed',1)
        // ->get();

        // dd($donationRuns);

        $tutorial = Tutorial::paginate(8);
        dd($tutorial->category());
        return view('guest.index', compact('tutorial'));
    }
    // public function indexAdmin()
    // {
    //     return 'Index Admin';
    // }

    // public function indexUser()
    // {
    //     return 'Index User';
    // }

    public function register()
    {
        return view('guest.register');
    }

    public function tutorial()
    {
    
    }

    public function tutorialSelect($id)
    {
        dd($id);
    }
}
