@extends('query.dashboard')

@section('content')
<table class="table table-striped table-dark" style="width: 90%; margin:auto; margin-top:100px;">
    <thead>
        <tr>
          <th scope="col" class="text-center">Nama</th>
          <th scope="col" class="text-center">Nip</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($pegawai as $p)
          <tr>
          <td class="text-center">{{$p->nama}}</td>
          <td class="text-center">{{$p->nip}}</td>
        </tr>
      @endforeach

      </tbody>
  </table>
@endsection
