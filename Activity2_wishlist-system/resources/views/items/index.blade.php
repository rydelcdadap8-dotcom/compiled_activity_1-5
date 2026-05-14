@extends('layouts.app')

@section('content')

<a href="/items/create" class="btn btn-add">➕ Add Item</a>

@foreach($items as $item)
    <div class="card">
        <h2>{{ $item->name }}</h2>
        <p>💰 ₱{{ $item->price }}</p>
        <p>📊 Priority: {{ $item->priority }}</p>
        <p>📦 Status: {{ $item->status }}</p>

        <a href="/items/{{ $item->id }}" class="btn btn-view">View</a>
        <a href="/items/{{ $item->id }}/edit" class="btn btn-edit">Edit</a>

        <form method="POST" action="/items/{{ $item->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-delete">Delete</button>
        </form>
    </div>
@endforeach

@endsection