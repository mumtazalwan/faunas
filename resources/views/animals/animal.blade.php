@extends('layout.main')

@section('content')
<?php foreach ($animal as $animal):?>
        <ul class="list-group list-group-horizontal" style="float: left">
            <div class="container mx-auto" style="display: inline">
                <div class="row">
                <a href="/animal/detail{{$animal['id']}}" style="text-decoration: none; color: black;">
                <div class="card mb-4" style="width: 18rem; margin-right: 20px; height: 350px; width: 250px">
                    <img class="card-img-top" src="image/{{$animal -> img_path}}.png" alt="Card image cap" style="height: 200px">
                        <div class="card-body">
                            <h5 class="card-title">{{$animal -> name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
                </a>
            </div>
        </ul>
   <?php endforeach; ?>
@endsection