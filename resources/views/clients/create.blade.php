@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>
                  <div class="panel-body"> </div>
                    <div class="bagages" >
                      <form class="bag" method="post" action="{{ url('/clients/store') }}">
                          {{csrf_field()}}
                              <legend>Client Information</legend>
                              <!-- @if(count($errors)>0)
                              <ul class="alert alert-danger">
                                  @foreach($errors->all() as $error)
                                  <li>{{$error}}</li>
                                  @endforeach
                                </ul>
                                @endif -->
                                      <label >Nom :
                                      <input type="Text" name="nom">
                                      </label></br>
                                      <label for="prenom" >Prénom
                                        <input type="text"  name="prenom">
                                      </label></br>
                                      <label >Tél :
                                        <input type="text"  name="tel">
                                      </label></br>
                                      <label  >address
                                        <!-- <input type="text"  name="address"> -->
                                      <textarea class="form-control" placeholder="addresse" name="addresse"></textarea>
                                      </label></br>
                                      <label  >E-mail :
                                        <input type="email"  name="email">
                                      </label></br>
                                      <a href="{{ url('/index')}}" class="btn btn-primary">Return</a>
                                      <button class="btn btn-primary" type="submit">Save</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
