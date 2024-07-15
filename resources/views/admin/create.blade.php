@extends('layouts.admin')
@include('partials.navbar')
@section('content')
    <form action="{{ route('admin.Project.store') }}" method="POST">
        @csrf
        <div class="w-50 m-5">
            <label for="formGroupExampleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Title" name="title">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description"
                name="description">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Img URL" name="img">
        </div>

        <select name="type_id" id="">
            <option value="{{ $type[0]->id }}">{{ $type[0]->name }}</option>
            <option value="{{ $type[1]->id }}">{{ $type[1]->name }}</option>
            <option value="{{ $type[2]->id }}">{{ $type[2]->name }}</option>
            <option value="{{ $type[3]->id }}">{{ $type[3]->name }}</option>
        </select>

        <button type="submit"> AGGIUNGI </button>
    </form>
@endsection
