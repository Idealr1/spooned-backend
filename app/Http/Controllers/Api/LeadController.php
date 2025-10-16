<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BetaRegistration;
use App\Models\EventPartnerLead;
use App\Models\NewsletterSignup;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function storeNewsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'source' => 'nullable|string',
        ]);

        $lead = NewsletterSignup::create([
            'email' => $data['email'],
            'source' => $data['source'] ?? 'stay-in-the-loop',
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return response()->json(['success' => true, 'id' => $lead->id]);
    }

    public function storeBeta(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'meta' => 'nullable|array',
        ]);

        $lead = BetaRegistration::create([
            'email' => $data['email'],
            'first_name' => $data['first_name'] ?? null,
            'last_name' => $data['last_name'] ?? null,
            'meta' => $data['meta'] ?? null,
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return response()->json(['success' => true, 'id' => $lead->id]);
    }

    public function storeEventPartner(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'company_name' => 'nullable|string',
            'contact_name' => 'nullable|string',
            'phone' => 'nullable|string',
            'message' => 'nullable|string',
            'meta' => 'nullable|array',
        ]);

        $lead = EventPartnerLead::create([
            'email' => $data['email'],
            'company_name' => $data['company_name'] ?? null,
            'contact_name' => $data['contact_name'] ?? null,
            'phone' => $data['phone'] ?? null,
            'message' => $data['message'] ?? null,
            'meta' => $data['meta'] ?? null,
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return response()->json(['success' => true, 'id' => $lead->id]);
    }
}
