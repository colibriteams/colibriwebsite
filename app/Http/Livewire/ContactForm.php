<?php

namespace App\Http\Livewire;

use Mail;
use Livewire\Component;
use App\Mail\ContactFormMail;
use Lukeraymonddowning\Honey\Traits\WithHoney;
use Lukeraymonddowning\Honey\Traits\WithRecaptcha;

class ContactForm extends Component
{
    use WithRecaptcha, WithHoney;

    public $name;
    public $email;
    public $organization;
    public $message;
    public $success;
    public $danger;
    public $type;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'organization' => 'required',
        'message' => 'required|min:5',
    ];

    protected function rules()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'organization' => 'required',
            'message' => 'required|min:5',
        ];

        if($this->type == 'job-updates') {
            $rules['organization'] = 'sometimes';
            $rules['message'] = 'sometimes';
        }

        return $rules;
    }

    public function contactFormSubmit()
    {
        $this->validate();

        try {
            $this->honeyPasses();
        } catch (\Exception $e) {
            $this->danger = 'Something went wrong. Please refresh the browser and try again.';
            return;
        }

        Mail::to(config('mail.contact-to.address'))
            ->send(
                new ContactFormMail(
                    $this->name,
                    $this->email,
                    $this->organization,
                    $this->message,
                    $this->type
                )
            );

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->organization = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
