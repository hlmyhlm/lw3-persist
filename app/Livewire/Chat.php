<?php

namespace App\Livewire;

use Livewire\Component;

class Chat extends Component
{
    /**
     * @var string[]
     */
    public array $messages = [];

    public string $message = '';

    public function addMessage()
    {
        $this->messages[] = $this->message;
        $this->reset('message');
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
