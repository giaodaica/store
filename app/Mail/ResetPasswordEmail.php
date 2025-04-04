<?php namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordEmail extends Mailable
{
    use SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.reset-password')
                    ->with([
                        'name' => $this->data['name'],
                        'newPassword' => $this->data['newPassword'],
                    ]);
    }
}
