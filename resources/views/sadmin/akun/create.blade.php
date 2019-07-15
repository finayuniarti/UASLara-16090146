@extends('sadmin.template')

@section('main')
  <div id="akun">
    <h2>Tambah Akun Admin</h2>

    {!! Form::open(['url' => 'sadmin/akun']) !!}
    @include('sadmin.akun.form', ['submitButtonText' => 'Tambah Akun'])
    {!! Form::close() !!}
  </div>
@stop

@section('footer')
  @include('sadmin.footer')
@stop
