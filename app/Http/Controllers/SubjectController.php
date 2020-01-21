<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\SubjectRepository;

use Crypt;

class SubjectController extends Controller
{

    private  $subject;

    public function __construct(SubjectRepository $subject) {
        $this->subject = $subject;
        // $this->middleware('decryptor');
    }


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $chapters=$this->subject->chapters($id)->take(10);
        return view('users.chapters',['chapters'=>$chapters]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
