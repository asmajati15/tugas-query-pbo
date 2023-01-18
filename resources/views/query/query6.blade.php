@extends('query.dashboard')

@section('content')
<table class="table table-striped table-dark" style="width: 90%; margin:auto; margin-top:100px;">
    <thead>
        <tr>
          <th scope="col" class="text-center">KD Pegawai</th>
          <th scope="col" class="text-center">Nip</th>
          <th scope="col" class="text-center">Nama</th>
          <th scope="col" class="text-center">Tanggal Lahir</th>
          <th scope="col" class="text-center">Status</th>
          <th scope="col" class="text-center">Anak</th>
          <th scope="col" class="text-center">Golongan</th>
          <th scope="col" class="text-center">Masuk KErja</th>
          <th scope="col" class="text-center">Divisi</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($pegawai as $p)
          <tr>
          <td class="text-center">{{$p->kd_pegawai}}</td>
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
@endsection
