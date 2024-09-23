@extends('test.layouts.layouts1')
@section('title', 'Listagem de Usuários')


@section('content')

    <h1 class="display-2 text-center ">Usuários! </h1>
<div class="container">
    <a href="{{ route('users.create') }}" class=" btn btn-dark mb-3" >Novo usuário</a>
    
</div>

    <x-aalert/>

    <table class="table table-dark table-striped" >
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ajustes</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
                            <i class="bi bi-gear"></i>
                        </a>
                        <a href="{{ route('users.show', $user->id) }}" class=" btn btn-dark ">
                            Detalhes
                        </a>
                        
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum registro encontrado</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    <br><br>
<div class="container d-flex justify-content-center">
    {{ $users->links() }}
</div>
@endsection
