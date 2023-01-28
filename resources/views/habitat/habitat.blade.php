@extends('layout.main')

@section('content')
    <?php foreach ($habitat as $habitat):?>
        <ul class="list-group list-group-horizontal" style="float: left">
            <div class="container mx-auto" style="display: inline">
            <div class="row">
                <div class="col">
                    <div class="card mb-5" style="max-width: 600px">
                        <div class="row g-0">
                            <div class="col">
                                <img src="image/{{$habitat -> img_path}}.png" class="img-fluid rounded-start" alt="..." style="height: 500px">
                            </div>
                            <div class="col">
                            <div class="card-body" style="height: 500px ">
                                <h5 class="card-title">{{$habitat -> name}}</h5>
                                <p class="card-text" style="text-align:justify; height: 100px">{{$habitat -> desc}}</p>
                                <ul style="position: relative; margin-top: 110%;">
                                <button type="button" class="btn btn-outline-dark mr-5"><a class="dropdown-item" href="/habitat/detail{{$habitat -> id}}">More Info</a></button>
                                <button type="button" class="btn btn-outline-dark"><a class="dropdown-item" href="/animal?idAnimal={{$habitat -> id}}">Animals</a></button>
                                </ul>
                </div>
            </div>
            </div>
        </ul>

        
   <?php endforeach; ?>
  @endsection
