<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Tạo một thể hiện của lớp TestEmail.
     *
     * @param  array  $data
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Xây dựng email.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Test Email')  // Tiêu đề email
                    ->view('emails.test');   // Chỉ định view email
    }
}
