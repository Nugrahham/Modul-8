@extends('Adminlayout/index')
@section('content')
    ini tabel dosen
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nip</th>
          <th scope="col">nmk</th>
          <th scope="col">name</th>
          <th scope="col">matakuliah</th>
          <th scope="col">alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dosen as $item)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->nip}}</td>
          <td>{{$item->nmk}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->matakuliah}}</td>
          <td>{{$item->alamat}}</td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
        </tbody>
      </table>
@endsection