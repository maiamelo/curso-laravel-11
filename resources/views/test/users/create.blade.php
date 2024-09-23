@extends('test.layouts.layouts1')

@section('title', 'Criação de novo usuário')

@section('content')

<h1 class="display-2 text-center ">Novo Usuário!</h1>

<form action="{{route('users.store')}}" method="POST" class="mx-auto w-50">
   @include('test.users.partials.form')
</form>


@endsection