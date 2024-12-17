<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Obtener los datos del formulario
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // Enviar el correo directamente
        Mail::to($email)->send(new NotificationMail($subject, $message));

        return response()->json([
            'status' => 'success',
            'message' => 'Correo enviado correctamente',
        ]);
    }

    // Función de prueba para enviar el correo
    public function sendTestEmail()
    {
        // Prueba del envío de correo
        Mail::to('rodrigogt0259@gmail.com')->send(new NotificationMail('Curso de Prueba', 'Este es un correo de prueba enviado desde el microservicio.'));

        return "Correo de prueba enviado";
    }
}
