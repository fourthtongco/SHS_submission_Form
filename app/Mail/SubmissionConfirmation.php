<?php

namespace App\Mail;

use App\Models\Detail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubmissionConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public Detail $detail;

    /**
     * Create a new message instance.
     */
    public function __construct(Detail $detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Submission Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
  


     public function build()
    {
        return $this->subject('Thank you for providing us with this submission form. 
        Our Lady of Perpetual Succor College (OLOPSC) is an academic institution committed 
        to providing quality education and supporting the academic and personal development of 
        our students. We appreciate the opportunity to participate in this submission and look 
        forward to a smooth and successful process. Should you require any additional information 
        or documentation, please do not hesitate to contact us.')
            ->view('emails.submission-confirmation');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
