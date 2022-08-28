@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('xdxd') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('title')
                <h6 class="alert alert-success">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">¿Qué haces cacas?</label>
                <input type="text" name="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <div>
            @foreach ($porhacerall as $porhaceruno)
                <div class="row py-2">
                    <div class="col-md-9 d-flex align-items-center">
                        <a href="#">{{$porhaceruno->tarea_pendiente}}</a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="#" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection