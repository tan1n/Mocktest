<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\StatsRepository;


class HomeController extends Controller
{

    private $user;
    private $stats;

    public function __construct(UserRepository $user,StatsRepository $stats)
    {
        $this->user=$user;
        $this->stats=$stats;
    }

    public function index()
    {
        $subjects=$this->user->subjects()->paginate(6);
        return view('users.index',['subjects'=>$subjects]);
    }

    public function profile(User $user)
    {
        $stats=$this->stats->all();

        return view('users.profile',['stats'=>$stats,'user'=>$user]);
    }




}
