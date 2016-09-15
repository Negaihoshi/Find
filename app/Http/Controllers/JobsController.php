<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
          'Experience' => 1,
          'Type' => '全端工程師',
          'Location' => 'Taipei',
          'JobConetnt' => '',
          'treatment_month' => [50000, 60000],
          'treatment_year' => [600000, 720000],
          'require' => '熟悉 PHP、MySQL、SQL、HTML、CSS、Javascript 程式撰寫',
          'bonusRequire' => '熟悉 PHP、MySQL、SQL、HTML、CSS、Javascript 程式撰寫',
          'welfare' => '免費健康檢查',
          'workingTime' => '週一至週五 09:00~18:15，中午休息 12:00~13:30'
          '加班' => 'false',
          'contact' => 'uakl@tset.com',
          'tag' => ['php', 'Node.js']
        ];
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
