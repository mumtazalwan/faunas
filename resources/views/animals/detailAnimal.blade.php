@extends('layout.main')

@section('content')
<br>
<h1>{{$animal['name']}}</h1>
<br>
<br>
<div style="height: 300px; width:400px; margin-left: auto; margin-right: auto;" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/image/{{$animal['img_path']}}.png" class="d-block w-100" alt="{{$animal['name']}}">
        </div>
        <div class="carousel-item">
        <img src="/image/{{$animal['img_path1']}}.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/image/{{$animal['img_path2']}}.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<br>
<div>
{{$animal['long_desc']}}
</div>
<br>
@endsection