@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier</div>
                  <div class="panel-body"> </div>
                    <div class="bagages" >
                      <form class="bag" method="post" action="{{ url('/update' ) }}">
                          {{csrf_field()}}
                              <legend>Modifier</legend>
                                    <label >Id :</br>
                                      <input type="text" name="id" value={{$clients->id}}>
                                      </label></br>
                                      <label >Nom :</br>

                                      <input type="Text" value="<?php echo $clients->nom; ?>" name="nom">
                                      </label></br>
                                      <label for="prenom" >Prénom</br>
                                        <input type="text" value="<?php echo $clients->prenom; ?>"  name="prenom">
                                      </label></br>
                                      <label >Tél :</br>
                                        <input type="text"  value="<?php echo $clients->tel; ?>"name="tel">
                                      </label></br>

                                      <label  >addresse

                                      <input class="form-control" value="<?php echo $clients->addresse; ?>"  placeholder="addresse" name="addresse">
                                      </label></br>
                                      <label  >E-mail :</br>
                                        <input type="email" value="<?php echo $clients->email; ?>" name="email">
                                      </label></br>
                                      <a href="{{ url('/index')}}" class="btn btn-primary">Return</a>
                                      <button class="btn btn-primary" type="submit">Save</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
