@extends('layouts.main')

@section('content')
    <div class="flex flex-wrap justify-center space-x-4 space-y-4 my-6">
        @foreach ($dosen as $data)
            <div class="card w-60 bg-base-100 shadow-xl bg-white">
                <figure><img src="{{ asset($data->photo) }}" alt="{{ $data->photo }}" /></figure>
                <div class="card-body h-48">
                    <h2 class="card-title">{{ $data->nama }}</h2>
                    <div class="card-actions absolute bottom-4 left-1/2 -translate-x-1/2">
                        <a href="/detaildosen/{{ $data->id }}"><button class="btn btn-primary ">Lebih Lanjut</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
