<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="font-family: Arial, sans-serif; background-color: #eef1f8; padding: 20px;">
    <div style="max-width: 500px; margin: 0 auto; background: white; border-radius: 8px; overflow: hidden;">
        <div style="height: 6px; background-color: #1d4596;"></div>
        <div style="padding: 24px;">
            <h2 style="color: #1d4596; margin-top: 0;">Thank you, {{ $detail->first_name }}!</h2>
            <p style="color: #333; line-height: 1.6;">
                We've received your inquiry about studying at
                <strong>Our Lady of Perpetual Succor College</strong>.
                Here's a summary of what you submitted:
            </p>

            <table style="width: 100%; border-collapse: collapse; margin-top: 16px;">
                <tr>
                    <td style="padding: 8px 0; color: #666; width: 40%;">Name</td>
                    <td style="padding: 8px 0; color: #111;">
                        {{ trim($detail->first_name . ' ' . $detail->middle_name . ' ' . $detail->last_name) }}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #666;">Preferred Strand/Program</td>
                    <td style="padding: 8px 0; color: #111;">{{ $detail->preferred_strand }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; color: #666;">Contact Number</td>
                    <td style="padding: 8px 0; color: #111;">{{ $detail->contact_number }}</td>
                </tr>
            </table>

            <p style="color: #333; line-height: 1.6; margin-top: 20px;">
                Our admissions team will get in touch with you soon. If you have urgent questions,
                feel free to visit our campus or call us directly.
            </p>

            <p style="color: #999; font-size: 12px; margin-top: 24px;">
                This is an automated message, please do not reply directly to this email.
            </p>
        </div>
    </div>
</body>
</html>