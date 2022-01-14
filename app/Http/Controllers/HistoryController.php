<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Models\HistoryDetail;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function History_D(){
        session_start();
        $History = History::where('User_ID','=',$_SESSION['id'])->get();
        return view('Customer/History')->with('History',$History);
    }

    public function History_Detail($Key){
        session_start();
        $History = HistoryDetail::join('histories', 'history_details.History_ID', '=', 'histories.History_ID')
                                ->join('keyboards', 'keyboards.Keyboard_ID' ,'=','history_details.Keyboard_ID')
                                ->where('histories.History_ID','=', $Key)->get();

        $Time = History::where('History_ID','=',$Key)->first();

        return view('Customer/HistoryDetail', compact('History','Time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryRequest  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryRequest $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
