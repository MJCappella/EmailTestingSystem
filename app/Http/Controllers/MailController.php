<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Models\EmailLog;
use App\Rules\EmailFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showForm()
    {
        return view('sendEmail');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => ['required',new EmailFormat],
        ]);

        $details = [
            'title' => 'Mail from Laravel App',
            'body' => 'Hello,

Thank you for subscribing to our newsletter! This is a test email created by a Laravel application. We are excited to have you on board.

Stay tuned for exciting updates, promotions, and exclusive offers.

Best regards,
[Laravel Team]
'
        ];

        try {
            Mail::to($request->email)->send(new UserMail($details));

            $request->validate([
                'email' => ['required', new EmailFormat],
            ]);

            //log successful email sending
            EmailLog::create([
                'subject' => $details['title'],
                'recipient' => $request->email,
                'success' => true
            ]);

            return back()->with('success', 'Email sent successfully!');

        } catch (\Exception $e) {
            //log unsuccessful email sending
           EmailLog::create([
                'subject' => $details['title'],
                'recipient' => $request->email,
                'success' => false
            ]);

            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
