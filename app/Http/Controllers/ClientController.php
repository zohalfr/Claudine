<?php

namespace App\Http\Controllers;

use App\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        //
        $clients = Client::all();
        return view ('index',['clients' => $clients ]);


    }



      public function create()
    {


      return view ('clients.create');

    }



  public function store(Request $request)
    {
        //
        Client::create($request->all());
        return redirect()->action('ClientController@index')->with('message','item has beeen added successfully');

    }



    public function edit( $id)
      {

          //return $id;
          $clients = Client::find($id);
          return view ('clients.edit',['clients' => $clients ]);

      }

      public function update(Request $request)
      {
        // Client::create($request->all());
        $this->validate($request, [

        'nom' => 'required',
         'prenom' => 'required',
         'tel' => 'required',
         'addresse' => 'required',
         'email' => 'required'
        ]);

        $data = array (
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'tel' => $request->input('tel'),
            'addresse' => $request->input('addresse'),
            'email' => $request->input('email'),

          );
          $id = $request -> input('id');

          //dd($id);

        Client::where('id',$id)->update($data);

        return redirect()->action('ClientController@index')->with('message','item has beeen updated successfully');

        // return $id;
        //   $clients = Client::find($id);

        // return view ('clients.update',['clients' => $clients ]);

      }

      public function show ($id){

          $clients = Client::find($id);
          return view ('clients.show',['clients' => $clients ]);

      }

        public function delete($id){
                // dd($id);
            Client::where('id',$id)->delete();
            return redirect()->action('ClientController@index')->with('message','item has beeen deleted successfully');

        }
}
