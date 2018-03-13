<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Bagage;

use Illuminate\Http\Request\BagageRequest;

class BagageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bagages= Bagage::all();

        return view ('index',['bagages'=>$bagages]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //   $bagages= Bagage::all();
    //     return view ('create',['bagages'=>$bagages]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request)
    {
        //
        // Bagage::create($request->all());
        // return redirect()->route('index')->with('message','item has beeen added successfully');

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

     public function add(Request $request){
       $this -> validate($request, [

       ]);
       // $bagages = new Bagage;
       // $bagages-> nom = $request->input('nom');
       // $bagages-> Prénom = $request->input('prenom');
       // $bagages-> Tel = $request->input('Tel');
       // $bagages->addresse = $request->input('addresse');
       // $bagages-> nombre_bagage = $request->input('nombre_bagage');
       // $bagages-> email= $request->input('email');
       // $bagages->Etape= $request->input('Etape');
       // $bagages->ville= $request->input('ville');
       // $bagages->date= $request->input('date');
       // $bagages->gite= $request->input('gite');
       // $bagages->save();
       return redirect('/index')->with('infos','saved successfully');

     }

    public function edit()
    {
        //
        $bagages= Bagage::all();
        return view ('bagages.edit',['bagages'=>$bagages]);


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
