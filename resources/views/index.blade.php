@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste de Clients</div>
                  <div class="panel-body"> </div>
                      <link rel="stylesheet" href="/css/index.css">
                          <table class="table table-hover">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{session('info')}}
                            </div>
                            @endif
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Tél</th>
                                        <th scope="col">email</th>
                                        <th scope="col">addresse</th>
                                        <th scope="col">choisir</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                          @if(count($clients) > 0)
                                            @foreach($clients as $client)
                                          <tr>
                                              <td scope="col">{{$client->id}}</td>
                                              <td scope="col">{{$client->nom}}</td>
                                              <td scope="col">{{$client->prenom}}</td>
                                              <td scope="col">{{$client->tel}}</td>
                                              <td scope="col">{{$client->email}}</td>
                                              <td scope="col">{{$client->addresse}}</td>
                                              <td>
                                                <a href='{{ url("/edit/{$client->id}") }}' class="label label-primary">Modifier</a></br>
                                                <a href='{{ url("/show/{$client->id}") }}' class="label label-success">show</a></br>
                                                <a href='{{ url("/delete/{$client->id}") }}' class="label label-danger">Suprimer</a>
                                              </td>
                                            </tr>

                                            @endforeach
                                          @endif
                                          <td><a href="{{ url('/clients/create')}}" class="btn btn-primary">Create</a></td>
                                    </tbody>
                            </table>
                        </div>
                      You are logged in!
              </div>
        </div>
</div>
@endsection
