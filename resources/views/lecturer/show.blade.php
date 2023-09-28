@extends('formTemplate')

@section('content')

<h3>{{ $lecture->name }}</h3>

<p>Name : {{ $lecture->name }}</p>
<p>Max credit : {{ $lecture->creditMax }}</p>
<p>Extra Credit : {{ $lecture->creditExtra }}</p>

<a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Back to index</a>
@endsection