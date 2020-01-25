<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Repositories\UserRepository;


class HomeController extends Controller
{

    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user=$user;
    }

    public function index()
    {
        $subjects=json_encode($this->user->subjects());

        return view('users.index',['subjects'=>$subjects]);
    }

    public function profile(User $user)
    {
        $stats=$this->stats->all();

    }



    
}
