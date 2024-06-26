@extends('admin.layouts.base')
@section('title', 'ImageCreate')
@section('content')
    <div class="container">
        <h1>Detail About</h1>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" class="form-control" value="{{ $about->judul }}" readonly>
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea id="text" class="form-control" rows="5" readonly>{{ $about->text }}</textarea>
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" id="video" class="form-control" value="{{ $about->video }}" readonly>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label><br>
            @if ($about->gambar)
                <img src="{{ asset('storage/' . $about->gambar) }}" alt="Gambar About" style="max-width: 400px;">
            @else
                <p>Tidak ada gambar yang tersedia.</p>
            @endif
        </div>
        <a href="{{ route('about.index') }}" class="btn btn-secondary">Kembali ke Daftar About</a>
    </div>
@endsection
