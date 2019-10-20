<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuditTable;
class AuditTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['audittable'] = AuditTable::all();
        return view('admin.usertables.audtable')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.usertables.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,AuditTable $audit)
    {

        $audit->SV =$request->sv;
        $audit->Control =$request->control;
        $audit->Observation =$request->observation;
        $audit->Severity =$request->severity;
        $audit->Closure =$request->closure;
        $audit->ClosureDate =$request->closuredate;
        $audit->Remarks =$request->remarks;
        $audit->save();
        return redirect('home/audtable');
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
    public function edit(AuditTable $audit)
    {
    
        $arr['audit']=$audit;
        return view('admin.usertables.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditTable $audit)
    {
        $audit->SV =$request->sv;
        $audit->Control =$request->control;
        $audit->Observation =$request->observation;
        $audit->Severity =$request->severity;
        $audit->Closure =$request->closure;
        $audit->ClosureDate =$request->closuredate;
        $audit->Remarks =$request->remarks;
        $audit->save();
        return redirect()->route('audtable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AuditTable::destroy($id);
        return redirect()->route('audtable.index');
    }
}
