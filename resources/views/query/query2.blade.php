@extends('query.dashboard')

@section('content')
<div class="mt-5 mx-auto" style="width: 90%; padding: 10px; border-radius: 20px; box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.2);">
  <table id="example" class="table table-striped" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col" class="text-center">Nip</th>
        <th scope="col" class="text-center">Nama</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pegawai as $p)
      <tr>
        <td class="text-center">{{$p->nip}}</td>
        <td class="text-center">{{$p->nama}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection