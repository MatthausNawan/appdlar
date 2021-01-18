@extends('layouts.register')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ route('cadastro') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <input id="name" type="text" class="form-control" name="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Seu melhor email" required>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

        <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Seu melhor Telefone" required>

        @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="Senha | mínnino 6 caracteres" required>
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" required="" name="termos" value="sim"> Li e aceito os <a href="{{ url('/termos-de-uso') }}">Termos e Condições Gerais de Uso</a>
        </label>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                @if ($errors->has('captcha'))
                <span class="help-block">
                    <strong>{{ $errors->first('captcha') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Cadastrar
            </button>
        </div>
    </div>
</form>

@endsection
@section('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    $('#refresh').click(function() {

        $.ajax({
            type: 'GET',
            url: '/refreshcaptcha',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection