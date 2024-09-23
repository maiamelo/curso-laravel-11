@extends('test.layouts.layouts1')
@section('title', 'Detalhes do usuário')

@section('content')

    <h1 class="display-2 text-center ">Detalhes do usuário </h1>


    <div class="flex justify-center ">
       
        <div class="bg-blue-500 text-white p-4 rounded "> 
            <ul class="font-semibold max-w-md text-gray-800 list-disc list-inside my-5">
                
                <li>Nome: {{ $user->name }}</li>
                <li>E-mail: {{ $user->email }}</li>
                
            </ul>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded my-5">
            <x-aalert />
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </form>
        </div>
    </div>

@endsection
