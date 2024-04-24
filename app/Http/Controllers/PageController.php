<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Mail\SimpleEmail;
use Illuminate\Support\Facades\Mail;
use PDF;
use Storage;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function courses()
    {
        return view('courses');
    }

    public function experiences()
    {
        return view('experiences');
    }

    public function sendEmail(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $request->input('name'),
            "subject" => $request->input('subject'),
            "emailer" => $request->input('email'),
            "message" => $request->input('message'),
        ];

        try {
            Mail::to('taizacristinasjp@gmail.com')->cc('flaviomartil5@gmail.com')->send(new SimpleEmail($data));
            return response("E-mail enviado com sucesso");
        } catch (\Exception $e) {
            return response("Erro ao enviar o e-mail: " . $e->getMessage(), 500);
        }
    }

    public function printPdf() {

        $imagePath = Storage::disk('public')->get('/img/taiza.jpg');
        $image = base64_encode($imagePath);

        $pdf = PDF::loadView('layouts/resume',['image' => $image]);

        return $pdf->download('curriculo.pdf');
    }
}
