<?php

namespace App\Http\Controllers;

use App\SmsMonitor;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Auth;
use Rap2hpoutre\FastExcel\FastExcel;

class SmsMonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = SmsMonitor::all();
        return view('app.sent_items', compact("data", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  export data to excel
    public function downloadExcel()
    {
        // $data = SmsMonitor::all();

        // $data = \DB::select("select  s.id,u.first_name as sender, s.receiver_no,s.message, s.status FROM sms_monitors s 
        // INNER JOIN users u ON
        // u.id=s.sender_id");
        // return $data;

        //return (new FastExcel($data))->export('report.csv');
        return (new FastExcel(SmsMonitor::all()))->download('sms_report.csv');
        flash('CSV report generated successfully')->success()->important();
        return back();
    }


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
