<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm as ContactFormModel;
use App\Http\Requests\StorePostRequest;
class ContactForm extends Component
{
    /**
     * Bind these to your component blade
     */
    public $firstName;
    public $lastName;
    public $email;
    public $message;

    protected $rules = [
        'firstName' => 'required|min:5',
        'lastName' => 'required|min:5',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addContactInquiry()
    {
        $this->validate();

        ContactFormModel::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'message' => $this->message,
        ]);
    }
}
