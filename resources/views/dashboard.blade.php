@extends('layout')

@section('content')
<div class="container">
    <h1>PrimeX Portal Dashboard</h1>
    <p>Total Clients: {{ $clients }}</p>
    <p>Total Projects: {{ $projects }}</p>
    <p>Total Payments: ₹{{ $payments }}</p>
    <p>Pending Payments: ₹{{ $pending }}</p>
</div>
@endsection
