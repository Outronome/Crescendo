<?php

namespace App\Mail;

use App\Models\Compra;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;

class CompraFinalizadaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $compra;

    public function __construct(Compra $compra)
    {
        $this->compra = $compra;
    }


public function build()
{
    $pdf = Pdf::loadView('pdf.recibo', ['compra' => $this->compra]);

    return $this->subject('Compra Finalizada com Sucesso')
                ->view('emails.compra_finalizada')
                ->attachData($pdf->output(), 'recibo-compra.pdf', [
                    'mime' => 'application/pdf',
                ]);
}
}
