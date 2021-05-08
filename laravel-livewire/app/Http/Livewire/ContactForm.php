<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm as ContactFormModel;

class ContactForm extends Component
{
    /**
     * Bind these to your component blade
     */
    public $firstName;
    public $lastName;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function addContactInquiry()
    {
        ContactFormModel::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'message' => $this->message,
        ]);
    }
}
