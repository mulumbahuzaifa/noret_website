<?php

namespace App\Http\Livewire;

// use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Setting;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
    }
    public function sendMessage(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message', 'Thanks, Your message has been sent successfully ');

        // $this->sendOrderConfirmationMail($contact);

    }
    // public function sendOrderConfirmationMail($contact){
    //     Mail::to($contact->email)->send(new ContactMail($contact));
    // }
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.contact-component',['setting' => $setting]);
    }
}