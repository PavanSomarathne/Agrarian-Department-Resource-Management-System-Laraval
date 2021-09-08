<?php
namespace App\Mail;
use Illuminate\Mail\Mailable;
namespace App\Http\Controllers;
use App\Models\Subsidie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subsidies = Subsidie::orderBy('id', 'desc')->take(4)->get();
        return view('welcome',['subsidies'=>$subsidies]);
    }
    
}
