<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Redefinir extends Component
{
    #[Layout('layout.front')]
    
    #[Validate('required|string|min:8|confirmed')]
    public $password;
    #[Validate('required|string|min:8')]
    public $password_confirmation;
    #[Validate('required')]
    public $token;
    public $email;
    
    public function mount($token)
    {
        // Pegue o token da URL
        $this->token = $token;
        $this->email = request()->query('email');
        $record = DB::table('password_reset_tokens')
            ->where('email', $this->email)
            ->first();
        if (!$record) {
            session()->flash('error', 'Token ou e-mail inválido!');
            return redirect()->route('login');
        }

        // Verifique se o token foi criado há mais de 24 horas
        $createdAt = Carbon::parse($record->created_at);

        if ($createdAt->diffInHours(now()) > 24) {
            // Se tiver mais de 24 horas, delete o token
            DB::table('password_reset_tokens')->where('email', $this->email)->delete();
            session()->flash('error', 'Este token expirou!');
            return redirect()->route('login');
        }
    }
    
    public function redefinir()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        $user->password = Hash::make($this->password);
        $user->save();
        DB::table('password_reset_tokens')->where('email', $this->email)->delete();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('pagina.auth.redefinir');
    }
}
