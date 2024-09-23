<?php

namespace App\Http\Controllers\Test;


use App\Http\Controllers\Controller;
use App\Http\Requests\SstoreUserRequest;
use App\Http\Requests\UupdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {

        $users = User::orderBy('id', 'desc')->paginate(8); //User::all();

        return view('test.users.index', compact('users'));
    }

    public function create()
    {

        return view('test.users.create');
    }

    public function store(SstoreUserRequest $request)
    {

        User::create($request->validated());
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso');
    }

    public function edit(User $user)
    {
        return view('test.users.edit', compact('user'));
    }

    public function update(UupdateUserRequest $request, User $user)
    {
        
        $data = $request->only('name', 'email');
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }
      
        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário alterado com sucesso!');
    }

    public function show(User $user)
    {
        return view('test.users.show', compact('user'));
    }

    public function destroy(User $user)
    {


        // if (Auth::user()->id === $user->id) {
        //     return back()
        //         ->with('error', 'Você não pode excluir o seu proprio perfil');
            
        // }
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário excluido com sucesso!');
    }
}