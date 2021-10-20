<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        if (config('boilerplate.access.captcha.contact')) {
            print("Here");
            $request->validate([
                'g-recaptcha-response' => ['required_if:captcha_status,true', new Captcha],
            ], [
                'g-recaptcha-response.required_if' => __('validation.required', ['attribute' => 'captcha']),
            ]);
        }
        Mail::to(getActiveTheme()->email)->send(new SendContact($request));

        return redirect()->back()->withFlashSuccess("Thank you! Your request has been submitted.");
    }
}
