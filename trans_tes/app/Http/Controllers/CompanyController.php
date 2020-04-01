<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compani = DB::table('companies')->paginate(5);

        return view('company.index',['company'=>$compani]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi
        $this->validate($request,[
            'nama'=> 'required',
            'email'=> 'required|email',
            'logo' => 'required|dimensions:min_width=100,min_height=100|mimes:png|max:2048',
            'website' => 'required'

        ]);


        $com = \App\Company::create($request->all());

        if($request->hasFile('logo')){
            $request->file('logo')->move('storage/app/company',$request->file('logo')->getClientOriginalName());
            $com->logo = $request->file('logo')->getClientOriginalName();
            $com->save();
        }

        return redirect()->route('company.index')->with('berhasil','Company berhasil ditambah');
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
        $com = \App\Company::find($id);

        return view('company.edit',['company'=>$com]);
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
            'email'=> 'required|email',
            'logo' => 'required|dimensions:min_width=100,min_height=100|mimes:png|max:2048',
            'website' => 'required'

        ]);

        
          $com = \App\Company::find($id);
          $com->update($request->all());

        if($request->hasFile('logo')){
            $request->file('logo')->move('storage/app/company',$request->file('logo')->getClientOriginalName());
            $com->logo = $request->file('logo')->getClientOriginalName();
            $com->save();
        }

       return redirect()->route('company.index')->with('berhasil','Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $com = \App\Company::find($id);
        $com->delete();

        return redirect()->route('company.index')->with('berhasil','Company berhasil Dihapus!');
    }
}
