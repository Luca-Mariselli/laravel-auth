@extends('layouts.admin')
@section('content')
    <section>
        <table class="w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $i => $item)
                    <tr style="border-bottom: 0.5px solid rgb(245, 245, 245)">
                        <th scope="row">#{{ $i + 1 }}</th>
                        <td class="p-1" style="width: 5%"><img src="{{ $item['img'] }}"
                                class="card-img-top object-fit-fill  rounded p-2" alt="..."
                                style="height: 100px; width :100px"></td>
                        <td class="w-25">{{ $item['title'] }}</td>
                        <td class="w-25">{{$item->type->name}}</td>
                        <td class="w-50">{{ $item['description'] }}</td>
                        <td>
                            <div class="d-flex">
                                
                            <a href="Project/{{$item->id}}" style="text-style:none;">
                                <button type="submit" class="badge" style="background-color: black; color: rgb(13, 65, 250)">
                                    More details
                                </button>
                            </a> 
                                <a href="Project/{{ $item->id }}/edit" style=" text-style:none;">
                                    <button type="submit" class="badge"
                                        style="background-color: black; color: rgb(11, 197, 52)">
                                        Modify
                                    </button>
                                </a>
                                <form action="{{ route('admin.Project.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge" style="background-color: black; color: red">Delete
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
