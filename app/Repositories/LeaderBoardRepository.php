<?php


namespace App\Repositories;


class LeaderBoardRepository
{
    public function  getTopSubject()
    {
        Stats::select(DB::raw('sum(mark) as total,stats.*'))->groupBy('subject_id')->get();
    }
}