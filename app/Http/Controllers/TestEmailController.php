<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;

class TestEmailController extends Controller
{
    public function sendTestEmail()
    {
        $subject = 'Curso de Prueba';
        $content = 'Este es un correo de prueba enviado desde el microservicio.';

        Mail::to('rodrigogt0259@gmail.com')->send(new NotificationMail($subject, $content));

        return "Correo de prueba enviado";
    }
}
