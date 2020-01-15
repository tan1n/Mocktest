<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;


class HomeController extends Controller
{

    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user=$user;
    }

    public function index(Request $request)
    {
        $subjects=json_encode($this->user->subjects());
        return view('users.index',['subjects'=>$subjects]);
    }


    
}
