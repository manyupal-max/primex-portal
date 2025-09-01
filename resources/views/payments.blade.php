@extends('layout')

@section('content')
<h2>Payments</h2>
<table class="table">
    <tr><th>ID</th><th>Client</th><th>Amount</th><th>Status</th></tr>
    @foreach($payments as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->client_id }}</td>
        <td>₹{{ $p->amount }}</td>
        <td>{{ $p->status }}</td>
    </tr>
    @endforeach
</table>

<h3>Generate UPI QR</h3>
<form method="POST" action="{{ url('payments/qr') }}">
    @csrf
    <input type="text" name="upi_id" placeholder="Enter UPI ID" class="form-control mb-2">
    <input type="number" name="amount" placeholder="Enter Amount" class="form-control mb-2">
    <button class="btn btn-success">Generate</button>
</form>
@endsection
