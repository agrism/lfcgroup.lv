<h2>Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $data['name'] ?? '-' }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '-' }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] ?? '-' }}</p>
<p><strong>Message:</strong> {{ $data['message'] ?? '-' }}</p>
<p><strong>DateTime:</strong> {{\Carbon\Carbon::now()->toDateTimeString()}}</p>
