@extends('layout.main')

@section('content')
<table class="table">
  <thead class="table-dark">
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Nationality</th>
      <th scope="col">Detail Animal</th>
      <th scope="col">Edit founder</th>
  </thead>
  <tbody>
<?php foreach ($founder as $founder):?>
      <td>{{$founder -> id}}</td>
      <td>{{$founder -> full_name}}</td>
      <td>{{$founder -> birth_date}}</td>
      <td>{{$founder -> nationality}}</td>
      <td>
      <a type="button" class="btn btn-link" data-toggle="modal" href="/animal/detail{{$founder -> animal_id}}">Animal Data</a>
      </td>
      <td>
      <a type="button" class="btn btn-warning" data-toggle="modal" href="/edit/{{$founder -> id}}">Go Edit</a>
      <form action="/delete/{{$founder->id}}" method="post" style="display: inline;">
          @method('delete')
          @csrf
        <button class="btn btn-danger" onClick="return confirm('Are you sure ?')">Hapus</button>
        </form>
    </td>
  </tbody>
<?php endforeach; ?>
</table>
@endsection
