@extends('admin.layouts.base')
@section('title', 'CoroselIndex')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Gambar Slider</h1>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk!
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        <a href="{{ route('corosel.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Gambar</a>
    </div>
    <br>
    <div class="container-fluid bg-white">
        <h1>Corosels</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Resolusi</th>
                        <th>Path</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($corosels as $corosel)
                        <tr>
                            <td>{{ $corosel->id }}</td>
                            <td>{{ $corosel->resolusi }}</td>
                            <td><img src="{{ asset('storage/' . $corosel->path) }}" width="100"></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('corosel.edit', $corosel->id) }}" class="btn btn-warning btn-sm"
                                        style="border-radius: 0;">Edit</a>
                                    <a href="{{ route('corosel.view', $corosel->id) }}" class="btn btn-info btn-sm"
                                        style="border-radius: 0;">View</a>
                                    <form action="{{ route('corosel.delete', $corosel->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            style="border-radius: 0;">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
