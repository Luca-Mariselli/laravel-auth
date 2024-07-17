@extends('layouts.admin')
@include('partials.navbar')
@section('content')
    <form action="{{ route('admin.Project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="w-50 m-5">
            <label for="formGroupExampleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Title" name="title"
                value="{{ old('title') ?? $project->title }}">
        </div>
        @error('title')
            <div>Errore nel titolo</div>
        @enderror
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description"
                name="description" value="{{ old('description') ?? $project->description }}">
        </div>
        @error('description')
            <div>Errore nella descrizione</div>
        @enderror
        <div class="w-50 m-5">
            {{-- <label for="formGroupExampleInput2" class="form-label">Image</label> --}}
            {{-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Img URL" name="img"
                value="{{ old('img') ?? $project->img }}"> --}}
            <div>
                <label for="">Actual IMG</label>
                <br>
                @if (Str::startsWith($project->img, 'http' ?? 'https'))
                    <img class="mb-5" width="200" style="object-fit:contain" src="{{ $project->img }}" alt="">
                @else
                    <img class="mb-5" width="200" style="object-fit:contain"
                        src="{{ asset('storage/' . $project->img) }}" alt="">
                @endif
            </div>
            <div>
                <label for="formGroupExampleInput2" class="form-label">Image</label>
                <input type="file" class="form-control" name="img" id="img" placeholder="Chose IMG file">

            </div>
        </div>
        <select name="type_id" id="">
            <option value="{{ $type[0]->id }}">{{ $type[0]->name }}</option>
            <option value="{{ $type[1]->id }}">{{ $type[1]->name }}</option>
            <option value="{{ $type[2]->id }}">{{ $type[2]->name }}</option>
            <option value="{{ $type[3]->id }}">{{ $type[3]->name }}</option>
        </select>
        @error('img')
            <div>Errore nel img</div>
        @enderror

        <button type="submit"> AGGIUNGI </button>
    </form>
@endsection
