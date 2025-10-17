<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message as MessageModel;

class Message extends Component
{

    public $email = '';
    public $body = '';

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'body' => 'required|min:10',
        ]);

        MessageModel::create([
            'email' => $this->email,
            'body' => $this->body,
        ]);

        $this->email = '';
        $this->body = '';

        session()->flash('message', 'Message successfully sent.');
    }

    public function render()
    {
        return view('livewire.message');
    }
}
