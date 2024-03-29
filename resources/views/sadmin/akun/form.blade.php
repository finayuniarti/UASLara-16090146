@if(isset($akun))
  {!! Form::hidden('id', $akun->id) !!}
@endif

  @if($errors->any())
  <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
    @else
    <div class="form-group">
      @endif
      {!! Form::label('name', 'Nama : ', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
      @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
      @endif
  </div>

  @if($errors->any())
  <div class="form-group {{ $errors->has('username') ? 'has-error' : 'has-success' }}">
    @else
    <div class="form-group">
      @endif
      {!! Form::label('username', 'Username : ', ['class' => 'control-label']) !!}
      {!! Form::text('username', null, ['class' => 'form-control']) !!}
      @if($errors->has('username'))
        <span class="help-block">{{ $errors->first('username') }}</span>
      @endif
  </div>

  @if($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
    @else
    <div class="form-group">
      @endif
      {!! Form::label('email', 'Email : ', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
      @if($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>

    @if($errors->any())
    <div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
      @else
      <div class="form-group">
        @endif
        {!! Form::label('password', 'Password : ', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @if($errors->has('password'))
          <span class="help-block">{{ $errors->first('password') }}</span>
          @endif
    </div>

    @if($errors->any())
    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success'}}">
      @else
      <div class="form-group">
        @endif
        {!! Form::label('password_confirmation', 'Password Confirmation : ', ['class' => 'control-label']) !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
          @if($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->fist('password_confirmation') }}</span>
          @endif
    </div>

    <div class="form-group">
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
