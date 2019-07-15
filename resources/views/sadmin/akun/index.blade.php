@extends('sadmin.template')

@section('main')
  <div id="akun">
    <h2>Akun Admin</h2>

    @include('_partial.flash_message')

  @if(count($akun_list) > 0)
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 0; ?>
      <?php foreach ($akun_list as $akun): ?>
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $akun->name }}</td>
        <td>{{ $akun->username }}</td>
        <td>{{ $akun->email }}</td>
        <td>
          <div class="box-button">{{ link_to('sadmin/akun/' . $akun->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}</div>
          <div class="box-button">
            {!! Form::open(['method' => 'DELETE', 'action' => ['AkunController@destroy', $akun->id]]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  @else
  <p>Tidak ada data akun admin</p>
  @endif

    <div class="tombol-nav">
      <a href="akun/create" class="btn btn-primary">Tambah Akun</a>
    </div>
  </div>
@stop

@section('footer')
  @include('sadmin.footer')
@stop
