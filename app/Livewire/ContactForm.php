<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    public $phone = '';

    #[Validate('required')]
    public $subject = '';

    #[Validate('required|min:10')]
    public $message = '';

    public function submit()
    {
        $this->validate();

        // Here you would typically send an email or save to database
        // For now, we'll just simulate success
        
        session()->flash('message', 'Terima kasih! Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.');

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
