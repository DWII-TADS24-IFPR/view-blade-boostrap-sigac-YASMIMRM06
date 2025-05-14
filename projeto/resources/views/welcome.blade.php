@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>Bem-vindo ao SIGAC</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Sistema Integrado de Gestão Acadêmica</p>
                    
                    <!-- Adicione aqui o conteúdo principal do seu sistema -->
                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="btn btn-success">
                            <i class="fas fa-sign-in-alt"></i> Acessar Sistema
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection