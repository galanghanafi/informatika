@extends('layouts.main')

@section('content')
    <div class="py-6 bg-yellow-300 -mx-12 px-12">
        <div class="my-10 text-center space-y-6">
            <p><a href="">Beranda</a> > Profil</p>
            <p class="text-4xl font-extralight">Profil Program Studi</p>
        </div>
    </div>
    <div class="mx-4 my-12 text-4xl font-extralight">
        <h1>Profil</h1>
    </div>
    <div class="my-6">
        <p>Lulusan Program Studi Informatika <b>FST UNRIYO</b> memiliki kompetensi umum yang terkait sikap dan
            tatanilai yang baik
            sebagai seorang sarjana sebagai berikut:
        </p>
    </div>
    <div class="my-6">
        <table>
            @foreach ($kompetensi as $key => $value)
                <tr>
                    <td class="px-4 align-top">{{ $key + 1 }}.</td>
                    <td>{{ $value->kompetensi }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="my-6">
        <p>Melalui serangkaian program pendidikan akademik dan nonakademik, maka Lulusan Program Studi Informatika yang
            memiliki kekhususan Internet of Things,Data Sciencedan InformationSecurity</p>
    </div>
    <div class="mx-auto justify-center my-6 border rounded-md shadow-lg">
        <div class="space-y-4 mt-4">
            <div class="bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solidfa-arrow-right"></i>
            </div>
            Visi Misi
            <hr class="ml-12">
        </div>
        <div class="space-y-4 mt-4">
            <div class="bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Profil Singkat
            <hr class="ml-12">
        </div>
        <div class="space-y-4 mt-4">
            <div class="bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Pendidikan S1-Informatika
            <hr class="ml-12">
        </div>
        <div class="space-y-4 mt-4">
            <div class="bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Pejabat Struktural
            <hr class="ml-12">
        </div>
        <div class="space-y-4 mt-4">
            <div class="bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Staff Dosen
            <hr class="ml-12">
        </div>
    </div>
    <div class="mt-6 py-6 bg-yellow-300 -mx-12 px-12">
        <div class="my-10">
            <p class="my-4 text-lg font-medium">UNIVERSITAS RESPATI YOGYAKARTA KAMPUS I</p>
            <p>Jl. Laksda Adisucipto KM.6,3, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                Yogyakarta 55281</p>
        </div>
        <div class="my-10">
            <p class="my-4 text-lg font-medium">UNIVERSITAS RESPATI YOGYAKARTA KAMPUS II</p>
            <p>Jalan Raya Tajem KM.1,5, Maguwoharjo, Depok, Kenayan, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah
                Istimewa Yogyakarta 55282</p>
        </div>
        <div class="my-10 space-y-4">
            <p class="my-4 text-lg font-medium">KONTAK</p>
            <div class="bg-blue-500 rounded-full w-6 -6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Telepon: 0274-288781
            <div class=" bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Faks: 0274-289780
            <div class=" bg-blue-500 rounded-full w-6 h-6 text-center"><i class="fa-solid fa-arrow-right"></i>
            </div>
            Email: informatika@respati.ac.id
        </div>
    </div>
@endsection
