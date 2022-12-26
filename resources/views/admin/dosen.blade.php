@extends('layouts.adminlayout')

@section('content')
    <div class="overflow-x-auto">
        {{-- cari --}}
        <div class="bg-white p-4 rounded-lg">
            {{-- form cari --}}
            <form action="/admin/dosen/search" method="post" class="">
                {{ csrf_field() }}
                <div class="flex space-x-2  text-center align-middle">
                    <input type="text" name="cari" placeholder="Cari Dosen" required='required'
                        class="input border focus:border-opacity-0 border-gray-100 w-full bg-white my-auto" />
                    <div class="flex flex-row justify-end space-x-2">
                        <button class="btn btn-success">
                            <input type="submit" value="cari"
                                class="text-md font-medium text-black uppercase cursor-pointer">
                        </button>
                    </div>
                    <a href="/admin/dosen" class="">
                        <div class="btn btn-warning font-medium text-sm">
                            Lihat Semua
                        </div>
                    </a>
                </div>

            </form>
        </div>
        <br>
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
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="bg-white w-0"></th>
                        <th class="bg-white w-0">Nama</th>
                        <th class="bg-white"></th>
                        <th class="bg-white w-0 text-end    ">
                            <a href="#tambah" class="">
                                <button class="btn btn-success font-medium">
                                    + Tambah
                                </button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $key => $data)
                        {{-- nama --}}
                        <tr>
                            <th class="bg-white w-0">{{ $dosen->firstItem() + $key }}</th>
                            <td class="bg-white w-0 ">{{ $data->nama }}</td>
                            <td class="bg-white "></td>
                            <td class="bg-white w-0 text-end">
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
                        {{-- fakultas --}}
                        <tr>
                            <td class="bg-white w-0"></td>
                            <td class="bg-white w-0 ">
                                <p>Fakultas</p>
                                <br>
                                <p>Jabatan Fungsional</p>
                                <br>
                                <p>Pendidikan S1</p>
                                <br>
                                <p>Pendidikan S2</p>
                                <br>
                                <p>Pendidikan S3</p>
                                <br>
                            </td>
                            <td class="bg-white ">
                                <p>
                                    @if ($data->fakultas == null)
                                        {{ '-' }}
                                    @else
                                        {{ $data->fakultas }}
                                    @endif
                                </p>
                                <br>
                                <p>
                                    @if ($data->jabatan_fungsional == null)
                                        {{ '-' }}
                                    @else
                                        {{ $data->jabatan_fungsional }}
                                    @endif
                                </p>
                                <br>
                                <p>
                                    @if ($data->s1 == null)
                                        {{ '-' }}
                                    @else
                                        {{ $data->s1 }}
                                    @endif
                                </p>
                                <br>
                                <p>
                                    @if ($data->s2 == null)
                                        {{ '-' }}
                                    @else
                                        {{ $data->s2 }}
                                    @endif
                                </p>
                                <br>
                                <p>
                                    @if ($data->s3 == null)
                                        {{ '-' }}
                                    @else
                                        {{ $data->s3 }}
                                    @endif
                                </p>
                                <br>
                            </td>
                            <td class="bg-white w-0 text-end "></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <br>
        {{ $dosen->links() }}
    </div>

    {{-- modal tambah --}}
    <div class="modal" id="tambah">
        <div class="modal-box bg-white">
            <h3 class="font-bold text-lg">Tambah Data Dosen</h3>
            <br>
            <form action="/admin/dosen/store" method="post">
                {{ csrf_field() }}
                {{-- nama --}}
                <input type="text" name="nama" placeholder="Nama" required='required'
                    class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                <br>
                {{-- jabatan Fungsional --}}
                <input type="text" name="jabatan_fungsional" placeholder="Jabatan Fungsional"
                    class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                <br>
                {{-- Jabatan Fungsional --}}
                <select class="max-w-xs input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white"
                    name="fakultas" required>
                    <option value="" disabled selected>Fakultas</option>
                    @foreach ($fakultas as $fdata)
                        <option class="bg-white" value="{{ $fdata->fakultas }}">
                            {{ $fdata->fakultas }}
                        </option>
                    @endforeach
                </select>
                <br>
                {{-- s1 --}}
                <input type="text" name="s1" placeholder="Pendidikan S1" required='required'
                    class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                <br>
                {{-- s2 --}}
                <input type="text" name="s2" placeholder="Pendidikan S2"
                    class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                <br>
                {{-- s3 --}}
                <input type="text" name="s3" placeholder="Pendidikan S3"
                    class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
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
    @foreach ($dosen as $data)
        <div class="modal" id="ubah/{{ strval($data->id) }}">
            <div class="modal-box bg-white">
                <h3 class="font-bold text-lg">Ubah Data Dosen</h3>
                <br>
                <form action="/admin/dosen/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="personal-image">
                        <label class="label">
                            <input type="file" name='photo' />
                            <figure class="personal-figure">
                                <img src="{{ asset($data->photo) }}" class="personal-avatar" alt="avatar">
                                <figcaption class="personal-figcaption">
                                    <img class="mx-auto"
                                        src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                                </figcaption>
                            </figure>
                        </label>
                    </div>
                    <br>
                    {{-- nama --}}
                    <input type="text" name="nama" placeholder="Nama" value="{{ $data->nama }}"
                        required='required'
                        class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                    <br>
                    {{-- Fakultas --}}
                    <select class="max-w-xs input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white"
                        name="fakultas">
                        @foreach ($fakultas as $fdata)
                            <option class="bg-white" value="{{ $fdata->fakultas }}"
                                {{ $fdata->fakultas == $data->fakultas ? ' selected' : ' ' }}>
                                {{ $fdata->fakultas }}
                            </option>
                        @endforeach
                    </select>
                    {{-- {{ dd($data->fakultas) }} --}}
                    <br>
                    {{-- Jabatan Fungsional --}}
                    <input type="text" name="jabatan_fungsional" placeholder="Jabatan Fungsional"
                        value="{{ $data->jabatan_fungsional }}"
                        class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                    <br>
                    {{-- s1 --}}
                    <input type="text" name="s1" placeholder="Pendidikan S1" value="{{ $data->s1 }}"
                        required='required'
                        class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                    <br>
                    {{-- s2 --}}
                    <input type="text" name="s2" placeholder="Pendidikan S2" value="{{ $data->s2 }}"
                        class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
                    <br>
                    {{-- s3 --}}
                    <input type="text" name="s3" placeholder="Pendidikan S3" value="{{ $data->s3 }}"
                        class="input border mb-2 focus:border-opacity-0 border-gray-100 w-full bg-white" />
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
    @foreach ($dosen as $data)
        <div class="modal" id="hapus/{{ strval($data->id) }}">
            <div class="modal-box bg-white">
                <h3 class="font-bold text-lg">Hapus Data kompetensi</h3>
                <br>
                <h3 class="font-medium text-base">Apakah Anda yakin menghapus</h3>
                <h3 class="font-medium text-base">{{ $data->kompetensi }} ?</h3>
                <br>
                <form action="/admin/dosen/destroy/{{ $data->id }}" method="post">
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
