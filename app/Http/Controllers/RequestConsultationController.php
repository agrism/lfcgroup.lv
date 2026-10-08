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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:100',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to('support@lfcgroup.lv')->send(new RequestConsultationForm($validated));

        return back()->with('success', __('site.contact.success'));
    }
}
