@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card card-glass p-4">

            <h3 class="title text-center mb-4">🎯 Random Challenge Generator</h3>

            {{-- SUCCESS --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- CHALLENGE OUTPUT --}}
            @if(session('challenge'))
                <div class="alert alert-info">
                    <strong>Your Challenge:</strong><br>
                    {{ session('challenge') }}
                </div>
            @endif

            {{-- ERRORS --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/dashboard">
                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control" value="{{ old('age') }}">
                </div>

                <div class="mb-3">
                    <label>Category</label>
                    <select name="category" class="form-select">
                        <option value="">Select</option>
                        <option value="coding">Coding</option>
                        <option value="fitness">Fitness</option>
                        <option value="study">Study</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Difficulty</label>
                    <select name="difficulty" class="form-select">
                        <option value="">Select</option>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Goal</label>
                    <textarea name="goal" class="form-control">{{ old('goal') }}</textarea>
                </div>

                <button class="btn btn-success w-100">
                    🚀 Generate Challenge
                </button>

            </form>

        </div>

    </div>

</div>

@endsection