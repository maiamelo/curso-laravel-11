@extends('test.layouts.layouts1')
@section('title', 'Edição de usuário')

@section('content')

    <h1 class="display-2 text-center ">Usuário {{ $user->name }}</h1>

   

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="mx-auto w-50">

        @method('PUT')
        @include('test.users.partials.form')

    </form>

@endsection
