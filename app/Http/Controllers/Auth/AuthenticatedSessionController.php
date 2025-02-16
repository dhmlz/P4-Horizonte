<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use palPalani\Toastr\Facades\Toastr;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');  // Exibe o formulário de login
    }
    public function store(Request $request)
    {
        // Valida os dados de login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            Toastr::success('Login realizado com sucesso!');
            return redirect()->intended('/home')->with('success', 'Login realizado com sucesso!');
        }
    
        // Se o login falhar
        Toastr::error('Login ou senha incorretos!');
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não são válidas.',
        ]);
    }
    
    public function destroy(Request $request)
    {
        Auth::logout();  // Faz o logout do usuário
        Toastr::info('Logout realizado com sucesso!');
        return redirect('/')->with('success', 'Logout realizado com sucesso!');
    }
}
