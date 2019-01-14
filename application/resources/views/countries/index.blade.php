@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/countries/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Country Code</th>
      <th scope="col">Country Name</th>
      <th scope="col">Continent Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($countries as $country)
    <tr>
      <td><?= $country->id ?></td>
      <td><?= $country->country_code ?></td>
      <td><?= $country->country_name ?></td>
      <td><?= $country->continent->continent_name ?></td>
      <td><a href="/countries/delete/{{ $country->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection