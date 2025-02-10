<?php

namespace App\Http\Controllers;

use App\Mail\RequestConsultationForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestConsultationController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to('support@lfcgroup.lv')->send(new RequestConsultationForm($validated));

        return back()->with('success', 'Message sent!');
    }
}
