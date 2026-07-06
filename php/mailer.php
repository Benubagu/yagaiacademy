<?php
/* ============================================================
   YAGAI ACADEMY — PHP Mailer Backend
   File: php/mailer.php
   Website: www.yagaiacademy.sch.ng
   ============================================================
   This file handles all form submissions from the website
   and sends emails to the appropriate school addresses.

   SETUP INSTRUCTIONS FOR YOUR DEVELOPER:
   1. Upload all files to your hosting public_html folder
   2. Create your custom email addresses in cPanel Webmail:
      - admissions@yagaiacademy.sch.ng
      - info@yagaiacademy.sch.ng
   3. No other configuration is needed on standard cPanel hosting
   ============================================================ */

// ── Only accept POST requests ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

// ── Sanitise helper ──
function clean($value) {
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

// ── Determine which form was submitted ──
$formType = isset($_POST['form_type']) ? clean($_POST['form_type']) : 'contact';

// ── School email addresses ──
$admissionsEmail = 'admissions@yagaiacademy.sch.ng';
$infoEmail       = 'info@yagaiacademy.sch.ng';
$fromName        = 'Yagai Academy Website';
$fromEmail       = 'noreply@yagaiacademy.sch.ng';

// ── Standard email headers ──
function buildHeaders($fromName, $fromEmail) {
    return implode("\r\n", [
        "From: {$fromName} <{$fromEmail}>",
        "Reply-To: {$fromEmail}",
        "MIME-Version: 1.0",
        "Content-Type: text/html; charset=UTF-8",
        "X-Mailer: PHP/" . phpversion()
    ]);
}

// ── Email wrapper template ──
function wrapEmail($title, $body) {
    return "
    <html><body style='font-family:Arial,sans-serif;background:#f4f4f4;padding:20px;'>
    <div style='max-width:600px;margin:auto;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.1);'>
      <div style='background:#1A1464;padding:24px 32px;'>
        <h2 style='color:#C8A52B;margin:0;font-size:20px;'>Yagai Academy</h2>
        <p style='color:rgba(255,255,255,.7);margin:4px 0 0;font-size:13px;'>Perseverance, A Key to Success</p>
      </div>
      <div style='padding:32px;'>
        <h3 style='color:#1A1464;margin-top:0;'>{$title}</h3>
        {$body}
      </div>
      <div style='background:#f0eee8;padding:16px 32px;font-size:11px;color:#999;text-align:center;'>
        P.M.B. 1180, Jalingo, Taraba State &nbsp;|&nbsp; www.yagaiacademy.sch.ng
      </div>
    </div>
    </body></html>";
}

// ── Row helper ──
function row($label, $value) {
    if (empty($value)) return '';
    return "<tr>
      <td style='padding:8px 12px;font-weight:bold;color:#1A1464;background:#f8f4ec;width:38%;vertical-align:top;'>{$label}</td>
      <td style='padding:8px 12px;color:#333;'>{$value}</td>
    </tr>";
}

// ============================================================
// ADMISSIONS FORM
// ============================================================
if ($formType === 'admissions') {
    $childFirst  = clean($_POST['child_first']  ?? '');
    $childLast   = clean($_POST['child_last']   ?? '');
    $level       = clean($_POST['level']        ?? '');
    $classYear   = clean($_POST['class_year']   ?? '');
    $dob         = clean($_POST['dob']          ?? '');
    $parentName  = clean($_POST['parent_name']  ?? '');
    $phone       = clean($_POST['phone']        ?? '');
    $email       = clean($_POST['email']        ?? '');
    $notes       = clean($_POST['notes']        ?? '');

    // Basic validation
    if (empty($childFirst) || empty($childLast) || empty($level) || empty($parentName) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $childName = $childFirst . ' ' . $childLast;
    $subject   = "New Admission Application — {$childName} ({$level})";

    $body = "
    <table style='width:100%;border-collapse:collapse;font-size:14px;'>
      " . row("Child's Full Name", $childName)
        . row("Level Applying For", $level)
        . row("Class / Year", $classYear)
        . row("Date of Birth", $dob)
        . row("Parent / Guardian", $parentName)
        . row("Phone Number", $phone)
        . row("Email Address", $email)
        . row("Additional Notes", $notes) . "
    </table>
    <p style='margin-top:20px;font-size:13px;color:#888;'>Submitted on: " . date('d M Y, H:i') . "</p>";

    $message = wrapEmail("New Admission Application", $body);
    $headers = buildHeaders($fromName, $fromEmail);

    // Send to admissions email
    $sent = mail($admissionsEmail, $subject, $message, $headers);

    // Send acknowledgement to parent if email provided
    if ($sent && !empty($email)) {
        $ackBody = "
        <p style='color:#333;'>Dear <strong>{$parentName}</strong>,</p>
        <p style='color:#555;line-height:1.7;'>Thank you for submitting an admission application for <strong>{$childName}</strong> to Yagai Academy. We have received your application and will contact you within <strong>2–3 working days</strong> to discuss the next steps.</p>
        <p style='color:#555;line-height:1.7;'>If you have any urgent questions, please contact us at <a href='mailto:{$admissionsEmail}' style='color:#1A1464;'>{$admissionsEmail}</a>.</p>
        <p style='color:#555;'>Warm regards,<br/><strong>Admissions Office</strong><br/>Yagai Academy</p>";
        $ackMessage = wrapEmail("Application Received — {$childName}", $ackBody);
        $ackSubject = "Your Admission Application Has Been Received — Yagai Academy";
        mail($email, $ackSubject, $ackMessage, buildHeaders('Yagai Academy Admissions', $admissionsEmail));
    }

    if ($sent) {
        echo json_encode(['status' => 'success', 'message' => 'Application submitted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send. Please email us directly at ' . $admissionsEmail]);
    }
    exit;
}

// ============================================================
// CONTACT / GENERAL ENQUIRY FORM
// ============================================================
if ($formType === 'contact') {
    $firstName = clean($_POST['first_name'] ?? '');
    $lastName  = clean($_POST['last_name']  ?? '');
    $email     = clean($_POST['email']      ?? '');
    $phone     = clean($_POST['phone']      ?? '');
    $subject   = clean($_POST['subject']    ?? 'General Enquiry');
    $message   = clean($_POST['message']    ?? '');

    // Basic validation
    if (empty($firstName) || empty($lastName) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $fullName    = $firstName . ' ' . $lastName;
    $emailSubject = "Website Enquiry: {$subject} — {$fullName}";

    $body = "
    <table style='width:100%;border-collapse:collapse;font-size:14px;'>
      " . row("Full Name", $fullName)
        . row("Email Address", $email)
        . row("Phone Number", $phone)
        . row("Subject", $subject)
        . row("Message", nl2br($message)) . "
    </table>
    <p style='margin-top:20px;font-size:13px;color:#888;'>Submitted on: " . date('d M Y, H:i') . "</p>";

    $emailMessage = wrapEmail("New Website Enquiry", $body);
    $headers      = buildHeaders($fromName, $fromEmail);

    // Route to info email
    $sent = mail($infoEmail, $emailSubject, $emailMessage, $headers);

    // Acknowledgement to sender
    if ($sent && !empty($email)) {
        $ackBody = "
        <p style='color:#333;'>Dear <strong>{$fullName}</strong>,</p>
        <p style='color:#555;line-height:1.7;'>Thank you for contacting Yagai Academy. We have received your message and will respond within <strong>24–48 hours</strong>.</p>
        <p style='color:#555;line-height:1.7;'>For urgent matters, you can reach us directly at <a href='mailto:{$infoEmail}' style='color:#1A1464;'>{$infoEmail}</a>.</p>
        <p style='color:#555;'>Warm regards,<br/><strong>Yagai Academy</strong><br/>Jalingo, Taraba State</p>";
        $ackMessage = wrapEmail("We've Received Your Message", $ackBody);
        mail($email, "Thank You for Contacting Yagai Academy", $ackMessage, buildHeaders('Yagai Academy', $infoEmail));
    }

    if ($sent) {
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send. Please email us directly at ' . $infoEmail]);
    }
    exit;
}

// ── Unknown form type ──
echo json_encode(['status' => 'error', 'message' => 'Unknown form type.']);
exit;
?>
