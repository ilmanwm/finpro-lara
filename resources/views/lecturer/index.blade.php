@extends('formTemplate')

@section('content')

<a href="{{ route('lecturers.create') }}" class="btn btn-primary">Add Lecture</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Max Credit</th>
            <th scope="col">Extra Credit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1
        @endphp
        @forelse ($lecturers as $l )
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $l->name }}</td>
            <td>{{ $l->creditMax }}</td>
            <td>{{ $l->creditExtra }}</td>
            <td>
                <a href="{{ route('lecturers.show', $l->idLecturer) }}" class="btn btn-success">Show</a>
                <a href="{{ route('lecturers.edit', $l->idLecturer) }}" class="btn btn-warning">Edit</a>
                <form onclick="return confirm('Are you sure?')"
                    action="{{ route('lecturers.destroy', $l->idLecturer) }}" style="display: inline" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
            @empty
            <td colspan="6" class="text-center">No record data</td>
            @endforelse

        </tr>
    </tbody>
</table>

@endsection