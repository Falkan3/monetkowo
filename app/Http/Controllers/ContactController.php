<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function SendMail(Request $request)
    {
        $name = $request['first_name'];
        $email = $request['email'];
        $tel = $request['tel'];
        $subject = intval($request['subject']);
        $contents = $request['contents'];

        $available_subjects = [1=>'Chcę poznać szczegóły oferty', 2=>'Współpraca', 3=>'Reklama', 4=>'Program Partnerski', 5=>'Uwagi do strony', 6=>'Korespondencja ogólna'];
        if(isset($subject) && $subject >=0 && $subject <=sizeof($available_subjects))
            $subject = $available_subjects[$subject];

        $response = $this->validateMail($name, $email, $tel, $subject, $contents);

        if (empty($response)) {
            try {
                Mail::queue('emails.contact', ['email' => $email, 'name' => $name, 'tel' => $tel, 'subject' => $subject, 'contents' => $contents],
                    function ($m) use ($email, $name, $subject) {
                        $m->from('kontakt@negocjujemypromocje.pl', 'negocjujemypromocje.pl');

                        $m->to($email)->subject('Potwierdzenie otrzymania wiadomości: ' . $subject . ' - NegocjujemyPromocje.pl');
                    });

                Mail::queue('emails.reminder', ['email' => $email, 'name' => $name, 'tel' => $tel, 'subject' => $subject, 'contents' => $contents],
                    function ($m) use ($email, $name, $subject) {
                        $m->from('kontakt@negocjujemypromocje.pl', 'negocjujemypromocje.pl');

                        $m->to('kontakt@negocjujemypromocje.pl')->subject('Nowa wiadomość: ' . $subject . ' - NegocjujemyPromocje.pl');
                    });
            } catch (\Exception $ex) {

                return response()->json([
                    'success' => false,
                    'message' => [$ex->getMessage()]
                ]);

                //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
            }

            return response()->json([
                'success' => true,
                'message' => ["Dziękujemy za przesłanie formularza."]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => $this->validateMail($name, $email, $tel, $subject, $contents)
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => $this->validateMail($name, $email, $tel, $subject, $contents)
        ]);

        //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
    }

    private function validateMail($name, $email, $tel, $subject, $content)
    {
        $response = array();
        if (strlen($name) <= 25) {
            if (!preg_match("/^[a-zA-Z\s\,\.\']*$/", $name)) {
                $response[] = "Imię zawiera niedozwolone znaki";
            }
        } else
            $response[] = "Imię jest za długie (max 25 znaków)";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
            $response[] = "Adres e-mail jest nieprawidłowy lub za długi (max 50 znaków)";
        }
        if (strlen($tel) > 14 || !preg_match("/^[0-9]{3}(-|\s)?[0-9]{3}(-|\s)?[0-9]{3}$/", $tel) && !preg_match("/^[0]?([0-9]{2})(-|\s)?[0-9]{3}(-|\s)?[0-9]{2}(-|\s)?[0-9]{2}$/", $tel)) {
            $response[] = "Numer telefonu jest nieprawidłowy";
        }
        if (is_null($subject)) {
            $response[] = "Temat nie może być pusty";
        }
        if (strlen($content) > 250) {
            $response[] = "Treść wiadomości jest za długa";
        }

        return $response;
    }
}
