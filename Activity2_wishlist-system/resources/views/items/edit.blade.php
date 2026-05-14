@extends('layouts.app')

@section('content')

<div class="card">
<h2>Edit Item</h2>

<form method="POST" action="/items/{{ $item->id }}">
@csrf
@method('PUT')

<input name="name" value="{{ $item->name }}">
<input name="price" value="{{ $item->price }}">

<select name="priority">
    <option {{ $item->priority == 'low' ? 'selected' : '' }}>low</option>
    <option {{ $item->priority == 'medium' ? 'selected' : '' }}>medium</option>
    <option {{ $item->priority == 'high' ? 'selected' : '' }}>high</option>
</select>

<select name="status">
    <option {{ $item->status == 'planned' ? 'selected' : '' }}>planned</option>
    <option {{ $item->status == 'bought' ? 'selected' : '' }}>bought</option>
</select>

<textarea name="notes">{{ $item->notes }}</textarea>

<button>Update</button>
</form>

</div>

@endsection