@extends('layouts.app')

@section('content')

<div class="card">
<h2>{{ $item->name }}</h2>

<p>💰 Price: ₱{{ $item->price }}</p>
<p>📊 Priority: {{ $item->priority }}</p>
<p>📦 Status: {{ $item->status }}</p>
<p>📝 Notes: {{ $item->notes }}</p>

<a href="/items" class="btn btn-view">⬅ Back</a>
</div>

@endsection