@extends('layouts.base2')

@section ('title','Home')

@section('maisinfo','teste 123')

@section('content')
    @component('alert')
        <strong>OPA</strong>DEU RUIM!
    @endcomponent
    <div class="jumbotron">
        OI
    </div>

@endsection

@section('sidebar')
    @parent
    <p>mais uma info</p>
@endsection

