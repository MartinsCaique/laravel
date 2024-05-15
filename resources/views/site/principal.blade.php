@extends('site.layouts.basico')

@section('titulo', 'Página Principal')

    @section('conteudo')
    @include('site.layouts._partials.menu')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                @component('site.layouts._components.form_contato', ['dark' => 'bg-light'])
                @endcomponent
            </div>
        </div>
    </div>

@endsection