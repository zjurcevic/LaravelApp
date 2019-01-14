@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/banks/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">OIB</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($banks as $bank)
    <tr>
      <td><?= $bank->id ?></td>
      <td><?= $bank->bank_name ?></td>
      <td><?= $bank->bank_oib ?></td>
      <td><a href="/banks/delete/{{ $bank->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection