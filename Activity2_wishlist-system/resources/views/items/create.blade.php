@extends('layouts.app')

@section('content')

<div class="card">
<h2>Add Item</h2>

<form method="POST" action="/items">
@csrf

<input name="name" placeholder="Item Name">
<input name="price" placeholder="Price">

<select name="priority">
    <option>low</option>
    <option>medium</option>
    <option>high</option>
</select>

<textarea name="notes" placeholder="Notes"></textarea>

<button>Save</button>
</form>

</div>

@endsection