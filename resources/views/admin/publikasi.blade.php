@extends('layouts.adminlayout')

@section('content')
    {{-- jika query kosong --}}
    @if ($dosen->isEmpty())
        <div class="w-full bg-white flex flex-col space-y-3 justify-center text-center h-screen-nav-search rounded-lg">
            <div>Belum Ada Data</div>
            <div class="bg-white">
                <a href="/admin/dosen#tambah" class="">
                    <button class="btn btn-success font-medium">
                        + Tambah
                    </button>
                </a>
            </div>
        </div>
        {{-- jika query ada tidak kosong --}}
    @else
        <!-- Table -->
        <table class="table min-w-full">
            <thead>
                <tr>
                    <th class="bg-white w-0"></th>
                    <th class="bg-white w-0">Publikasi</th>
                    <th class="bg-white"></th>
                    <th class="bg-white w-0 text-end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $key => $data)
                    {{-- head --}}
                    <tr>
                        <th class="bg-white w-0">{{ $dosen->firstItem() + $key }}</th>
                        <td class="bg-white">{{ $data->nama }}</td>
                        <td class="bg-white w-0 text-end"></td>
                    </tr>
                    {{-- Penelitian --}}
                    <tr>
                        <td class="bg-white w-0 align-top">
                            Penelitian
                        </td>
                        <td class="bg-white">
                            <p>asd</p>
                            <p>asd</p>
                            <p>asd</p>
                            <p>asd</p>
                            <p>asd</p>
                        </td>
                        <td class="bg-white w-0 text-end ">
                            <a href=""></a>
                        </td>
                    </tr>
                    {{-- Jurnal --}}
                    <tr>
                        <td class="bg-white w-0 align-top">
                            Jurnal
                        </td>
                        <td class="bg-white"></td>
                        <td class="bg-white w-0 text-end "></td>
                    </tr>
                    {{-- Buku --}}
                    <tr>
                        <td class="bg-white w-0 align-top">
                            Buku
                        </td>
                        <td class="bg-white"></td>
                        <td class="bg-white w-0 text-end "></td>
                    </tr>
                    {{-- HKI --}}
                    <tr>
                        <td class="bg-white w-0 align-top">
                            HKI
                        </td>
                        <td class="bg-white w-"></td>
                        <td class="bg-white w-0 text-end "></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
