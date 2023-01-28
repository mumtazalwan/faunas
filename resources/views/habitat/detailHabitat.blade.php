@extends('layout.main')

@section('content')
<br>
<h1>{{$habitat['name']}}</h1>
<br>
<br>
<div style="height: 300px; width:400px; margin-left: auto; margin-right: auto;" >
<img src="/image/{{$habitat['bg_img']}}.png" class="d-block w-100" alt="{{$habitat['name']}}">
</div>
<br>
<div>
{{$habitat['desc']}}
</div>
<br>
@endsection