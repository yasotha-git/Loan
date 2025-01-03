<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $loanApplication;

    /**
     * Create a new message instance.
     */
    public function __construct($loanApplication)
    {
        // Ensure you're passing the Enquiry object correctly
        $this->loanApplication = $loanApplication;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Application Submitted Successfully')
                    ->view('emails.application-submitted');
    }
}