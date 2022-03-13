<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function composeEmail(Request $request)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            // Server Setting
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';                     // SMTP Host
            $mail->SMTPAuth = true;
            $mail->Username = 'noreply-surveyasia@citiasiainc.id';     // Sender Username
            $mail->Password = 'surveyasia2021';               // Sender Password
            $mail->SMTPSecure = 'tls';                          // Encryption - ssl/tls
            $mail->Port = 587;                                  // Port - 587/465

            // Recepient
            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('surveyasia@citiasiainc.id', 'Surveyasia');
            $mail->addReplyTo($request->email, $request->name);

            // Content
            $mail->isHTML(true);                // Set email content format to HTML
            $mail->Subject = $request->roles . ' | ' . $request->email . ' | ' . $request->subject;
            $mail->Body    = $request->description;
            $mail->AltBody = $request->description;

            if (!$mail->send()) {
                return back()->with("failed", "Permintaan tidak berhasil terkirim.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Permintaan telah berhasil terkirim.");
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
}
