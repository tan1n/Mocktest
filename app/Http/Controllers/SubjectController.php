<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;


class SubjectController extends Controller
{

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

    public function show(Subject $subject)
    {
        $chapters=$subject->chapters()->paginate(10);

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
