<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$emp = DB::table('employes')->paginate(5);
        $employes = \App\Employe::paginate(5);
        
        //return dd($employes);

        return view('employe.index',['employe'=>$employes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = \App\Company::all();

        return view('employe.create',['company'=>$company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama'=> 'required',
            'email'=> 'required|email'

        ]);

         $employes = \App\Employe::create($request->all());
         //return dd($request->all());

         return redirect()->route('employe.index')->with('berhasil','Employe Berhasil Ditambah');
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
        $employes = \App\Employe::find($id);
        $company = \App\Company::all();

        //return dd($employes);

        return view('employe.edit',['employe'=>$employes,'company'=>$company]);
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
        $this->validate($request,[
            'nama'=> 'required',
            'email'=> 'required|email'

        ]);

         $employes = \App\Employe::find($id);
         $employes->update($request->all());

         return redirect()->route('employe.index')->with('berhasil','Employe Berhasil Diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employes = \App\Employe::find($id);
        $employes->delete();

         return redirect()->route('employe.index')->with('berhasil','Employe Berhasil Dihapus'); 
    }
}
