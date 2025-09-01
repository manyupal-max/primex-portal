@extends('layout')

@section('content')
<h2>Projects</h2>
<table class="table">
    <tr><th>ID</th><th>Title</th><th>Status</th></tr>
    @foreach($projects as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->title }}</td>
        <td>{{ $p->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
