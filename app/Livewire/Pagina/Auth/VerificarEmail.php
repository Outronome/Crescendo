<?php
namespace App\Livewire\Pagina\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use App\Notifications\CustomEmailVerification;

class VerificarEmail extends Component
{
    #[Layout('layout.front')]

    public function mount(Request $request, $id, $hash)
    {
        // Valide se o email existe na tabela de usuários
        $user = User::where('id', $id)->first();
        if ($user) {
            // Verifique se a URL tem uma assinatura válida
            if (! URL::hasValidSignature($request)) {
                // Se o link for inválido, envie um novo e-mail de verificação
                $user->notify(new CustomEmailVerification());
                return redirect()->route('login')->with('error', 'Link de verificação inválido');
            }
            
            // Verifique se o e-mail já foi verificado
            if ($user->hasVerifiedEmail()) {
                return redirect()->route('login');
            } else {
                // Se o e-mail não foi verificado, podemos verificar o token (se necessário)
                // Caso contrário, podemos retornar um erro informando que o e-mail não foi verificado
                // Atualize o campo `email_verified_at` do usuário
                $user->email_verified_at = Carbon::now();
                $user->save();

                // Enviar um e-mail de verificação, caso necessário
                // $user->notify(new CustomEmailVerification());

                return redirect()->route('login')->with('success', 'E-mail verificado com sucesso');
            }
        } else {
            // Caso o usuário não seja encontrado
            return redirect()->route('login')->with('error', 'Usuário não encontrado');
        }
    }
}
