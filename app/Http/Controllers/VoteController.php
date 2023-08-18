<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use App\Models\Vote;
use App\Models\Content;

class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::all();
        return view('vote.index', compact('votes'));
    }

    public function create($id)
    {
        $votes = new Vote;
        $contents = Content::findOrFail($id);
        return view('vote.form', compact('contents'));
    }

    public function store(VoteRequest $request, $id)
    {
        $votes = new Vote;
        $this->save($votes, $request, $id);
        return redirect('/content');
    }

    private function save($data, $value, $id)
    {
        $data->vote = $value->vote;
        $data->contents_id = $id;
        $data->save();
    }
}
