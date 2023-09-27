<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ];


    public function submitForm()
    {
        // Validate the form fields
        $this->validate();

        // Store the data in the database
        $contact = Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);
        
        // Clear the form fields
        $this->reset();
        
        //send email
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(
            (new ContactMessage($contact))
        );

        session()->flash('success', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
