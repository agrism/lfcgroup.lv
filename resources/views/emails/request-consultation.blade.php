<h2>Jauns pieteikums / Contact Form Submission</h2>
<p><strong>Vārds / Name:</strong> {{ $data['name'] ?? '-' }}</p>
<p><strong>E-pasts / Email:</strong> {{ $data['email'] ?? '-' }}</p>
<p><strong>Telefons / WhatsApp:</strong> {{ $data['phone'] ?? '-' }}</p>
<p><strong>Pakalpojums / Service:</strong> {{ $data['subject'] ?? '-' }}</p>
<p><strong>Piedāvātā cena / Budget:</strong> {{ $data['budget'] ?? 'Nav norādīts / Not specified' }}</p>
<p><strong>Projekta detaļas / Message:</strong></p>
<div style="background: #f8fafc; padding: 12px; border-left: 4px solid #0f172a; white-space: pre-wrap; font-family: sans-serif;">{{ $data['message'] ?? '-' }}</div>
<p style="color: #64748b; font-size: 12px; margin-top: 16px;"><strong>Laiks / DateTime:</strong> {{ \Carbon\Carbon::now()->toDateTimeString() }}</p>
