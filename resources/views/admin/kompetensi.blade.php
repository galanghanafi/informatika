@extends('layouts.adminlayout')

@section('content')
    <div class="overflow-x-auto">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th class="bg-white w-0"></th>
                    <th class="bg-white text-lg">Kompetensi</th>
                    <th class="bg-white w-0">
                        <a href="#tambah" class="">
                            <button class="btn btn-success font-medium">
                                + Tambah
                            </button>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kompetensi as $data)
                    <tr>
                        <th class="bg-white w-0">{{ $loop->index + 1 }}</th>
                        <td class="bg-white whitespace-pre-wrap">{{ $data->kompetensi }}</td>
                        <td class="bg-white w-0">
                            <a href="#ubah/{{ $data->id }}">
                                <div class="btn btn-warning font-medium">
                                    Ubah
                                </div>
                            </a>
                            <a href="#hapus/{{ $data->id }}">
                                <button class="btn btn-error font-medium">
                                    Hapus
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $kompetensi->links() }}
    </div>

    {{-- modal tambah --}}
    <div class="modal" id="tambah">
        <div class="modal-box bg-white">
            <h3 class="font-bold text-lg">Tambah data kompetensi</h3>
            <br>
            <form action="/admin/kompetensi/store" method="post">
                {{ csrf_field() }}
                <input type="text" name="kompetensi" placeholder="Kompetensi" required='required'
                    class="input border focus:border-opacity-0 border-gray-100 w-full bg-white" />
                <br>
                <div class="flex flex-row justify-end mt-4 space-x-2">
                    <button class="btn btn-success">
                        <input type="submit" value="Tambah"
                            class="text-md font-medium text-black uppercase cursor-pointer">
                    </button>
                    <a href="#" class="">
                        <div class="btn btn-warning font-medium text-sm">
                            Batalkan
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </div>

    {{-- modal ubah --}}
    @foreach ($kompetensi as $data)
        <div class="modal" id="ubah/{{ strval($data->id) }}">
            <div class="modal-box bg-white">
                <h3 class="font-bold text-lg">Ubah data kompetensi</h3>
                <br>
                <form action="/admin/kompetensi/update/{{ $data->id }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="kompetensi" placeholder="{{ $data->kompetensi }}" required='required'
                        class="input border focus:border-opacity-0 border-gray-100 w-full bg-white" />
                    <br>
                    <div class="flex flex-row justify-end mt-4 space-x-2">
                        <button class="btn btn-success">
                            <input type="submit" value="Ubah"
                                class="text-md font-medium text-black uppercase cursor-pointer">
                        </button>
                        <a href="#" class="">
                            <div class="btn btn-warning font-medium text-sm">
                                Batalkan
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    {{-- modal hapus --}}
    @foreach ($kompetensi as $data)
        <div class="modal" id="hapus/{{ strval($data->id) }}">
            <div class="modal-box bg-white">
                <h3 class="font-bold text-lg">Hapus data kompetensi</h3>
                <br>
                <h3 class="font-medium text-base">Apakah Anda yakin menghapus</h3>
                <h3 class="font-medium text-base">{{ $data->kompetensi }} ?</h3>
                <br>
                <form action="/admin/kompetensi/destroy/{{ $data->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="flex flex-row justify-end mt-4 space-x-2">
                        <button class="btn btn-success">
                            <input type="submit" value="Hapus"
                                class="text-md font-medium text-black uppercase cursor-pointer">
                        </button>
                        <a href="#" class="">
                            <div class="btn btn-warning font-medium text-sm">
                                Batalkan
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
