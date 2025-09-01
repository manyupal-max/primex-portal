@extends('layout')

@section('content')
<h2>Clients</h2>
<table class="table">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>
    @foreach($clients as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->phone }}</td>
    </tr>
    @endforeach
</table>
@endsection
