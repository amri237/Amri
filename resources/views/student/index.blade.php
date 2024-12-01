@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ route('student.create') }}" class="btn btn-warning btn-sm">Create</a>
                @if(session('success'))
                <p>{{ session('success') }}</p>
                @endif
            <div class="card">
                <div class="card-header">Student</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->kelas }}</td>
                                <td>
                                    <a href="{{ route('student.show', $s->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('student.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('student.destroy', $s->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
