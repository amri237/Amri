@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Siswa</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $student->nama }}</p>
                    <p><strong>NIM:</strong> {{ $student->nim }}</p>
                    <p><strong>Kelas:</strong> {{ $student->kelas }}</p>
                    <a href="{{ route('student.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection