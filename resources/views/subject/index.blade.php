@extends('formTemplate')

@section('content')

<a href="{{ route('subjects.create') }}" class="btn btn-primary">Add Lecture</a>

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
        @forelse ($subjects as $s )
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $s->code }}</td>
            <td>{{ $s->subject }}</td>
            <td>{{ $s->credit }}</td>
            <td>
                <a href="{{ route('subjects.show', $s->code) }}" class="btn btn-success">Show</a>
                <a href="{{ route('subjects.edit', $s->code) }}" class="btn btn-warning">Edit</a>
                <form onclick="return confirm('Are you sure?')" action="{{ route('subjects.destroy', $s->code) }}"
                    style="display: inline" method="post">
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