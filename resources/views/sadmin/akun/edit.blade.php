@extends('sadmin.template')

@section('main')
  <div id="akun">
    <h2>Edit Akun Admin</h2>

    {!! Form::model($akun, ['method' => 'PATCH', 'action' => ['AkunController@update', $akun->id]]) !!}
    @include('sadmin.akun.form', ['submitButtonText' => 'Update Akun'])
    {!! Form::close() !!}
  </div>
@stop

@section('footer')
  @include('sadmin.footer')
@stop
