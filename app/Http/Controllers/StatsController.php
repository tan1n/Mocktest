<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\StatsRepository;

class StatsController extends Controller
{
    private $stats;

    public function __construct(StatsRepository $stats)
    {
        $this->stats = $stats;
    }

    public function index()
    {
        $strong_chapter=$this->stats->strongChapter();
        $strong_subject=$this->stats->strongSubject();
        $most_mark=$this->stats->mostMarks();
        $worst_mark=$this->stats->worstMarks();
//        $total_test=$this->stats->get();
        $total_test=4;
//        dd($this->stats->all());
        return view('stats.index',[
            'stats'=>$this->stats->all(),
            'total_test'=>$total_test,
            'highest_mark'=>$most_mark,
            'lowest_mark'=>$worst_mark,
            'strong_chapter'=>$strong_chapter,
            'strong_subject'=>$strong_subject,
        ]);
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
        return view('stats.show',['stats'=>$this->stats->get($id),'result'=>$this->stats->total]);
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
