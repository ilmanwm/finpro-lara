@extends('formTemplate')


@section('content')
<form action="{{ route('lecturers.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Maximum Credit</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="creditMax">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Extra Credit</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="creditExtra">
    </div>

    <input type="submit" value="save" class="btn btn-primary">
</form>
@endsection