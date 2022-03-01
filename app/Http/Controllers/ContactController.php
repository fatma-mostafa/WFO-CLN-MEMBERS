<?php
use App\Branch;
use App\Branch_Tel;
use App\Branch_Fax;
use App\Email;
use App\Agent;
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
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

    public function Contact_US($a){
        /* $branch_Tel = [];
        $branch_Fax = [];
        $branch_Email = []; */
        $Agent = \DB::table('agents')->where('ID','=',$a)->get()->first();
        $branches = \DB::table('branches')->where('Agents_ID','=',$a)->get()->toArray();
        $Count = count($branches);
        for($i = 0 ;$i < $Count ; $i++){
            $branch_Tel[$i] = \DB::table('branch_tel')->where('Branches_ID','=',$branches[$i]->ID)->get();
            $branch_Fax[$i] = \DB::table('branch_fax')->where('Branches_ID','=',$branches[$i]->ID)->get();
            $branch_Email[$i] = \DB::table('email')->where('Branches_ID','=',$branches[$i]->ID)->get();
        }
        //dd($Agent);
        //dd ($branch_Tel);
        return view('proj\contactInfo',compact('Agent','branches','Count','branch_Tel','branch_Fax','branch_Email'));
        
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
