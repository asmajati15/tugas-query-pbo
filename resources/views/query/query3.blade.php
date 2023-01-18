@extends('query.dashboard')

@section('content')
<div class="mt-5 mx-auto" style="width: 90%; padding: 10px; border-radius: 20px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.2);">
  <table id="example" class="table table-striped" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col" class="text-center">KD Pegawai</th>
        <th scope="col" class="text-center">Nip</th>
        <th scope="col" class="text-center">Nama</th>
        <th scope="col" class="text-center">Tanggal Lahir</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Anak</th>
        <th scope="col" class="text-center">Golongan</th>
        <th scope="col" class="text-center">Masuk Kerja</th>
        <th scope="col" class="text-center">Divisi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pegawai as $p)
      <tr>
        <td class="text-center">{{$loop->iteration}}</td>
        <td class="text-center">{{$p->nip}}</td>
        <td class="text-center">{{$p->nama}}</td>
        <td class="text-center">{{$p->tgl_lahir}}</td>
        <td class="text-center">{{$p->status}}</td>
        <td class="text-center">{{$p->anak}}</td>
        <td class="text-center">{{$p->golongan}}</td>
        <td class="text-center">{{$p->masuk_kerja}}</td>
        <td class="text-center">{{$p->divisi}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection