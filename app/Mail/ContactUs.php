<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $email;
    public $additional_message;
    public $select_date;
    public $select_department;
    public $phone_number;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $additional_message, $select_date,
                                $select_department,$phone_number)
    {
        $this->name=$name;
        $this->email=$email;
        $this->additional_message=$additional_message;
        $this->select_date=$select_date;
        $this->select_department=$select_department;
        $this->phone_number=$phone_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactUsStyle');
    }
}
