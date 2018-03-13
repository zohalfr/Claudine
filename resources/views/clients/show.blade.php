@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Information de clients</div>
                  <div class="panel-body"> </div>

                      <p>{{$clients->id}}</p>
                      <p>{{$clients->nom}}</p>
                      <p>{{$clients->prenom}}</p>
                      <p>{{$clients->tel}}</p>
                      <p>{{$clients->email}}</p>
                      <p>{{$clients->addresse}}</p>
                      <a href="{{ url('/index')}}" class="btn btn-primary">Return</a>

            </div>
        </div>
    </div>
</div>

@endsection
