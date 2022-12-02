@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Realize a validação do seu e-mail para concluir o cadastro.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos o link para seu e-mail, verifique também a sua caixa de Span.
                        </div>
                    @endif

                    Falta Pouco, clique no link de validação que foi enviado ao seu e-mail.
                    Caso não tenha recebido o e-mail de verificação clique no link ao lado,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui para que o e-mail possa ser reenviado</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
