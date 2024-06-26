@extends('admin.layouts.base')
@section('title', 'Beranda')
@section('content')
    <div class="container">
        <h1>View Home</h1>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $home->kategori }}" disabled>
        </div>
        {{-- <div class="form-group">
            <label for="id_image">Image</label>
            <input type="text" name="id_image" class="form-control" value="{{ $home->images->path }}" disabled>
        </div> --}}
        <div class="form-group">
            <label for="path">Image</label>
            <img src="{{ asset('storage/' . $home->images->path) }}" width="100">
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#previewModal"><i
                    class="fas fa-fw fa-eye"></i> lihat
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Preview Gambar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('storage/' . $home->images->path) }}" class="img-fluid" alt="Preview Gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="id_text">Text</label>
            <input type="text" name="id_text" class="form-control" value="{{ $home->texts->paragraph }}" disabled>
        </div>
    </div>
@endsection
