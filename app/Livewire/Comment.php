<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments = [
        [
            'body' => ' Working on it ',
            'created_at' => '3 mins ago',
            'creator' => 'Favicon'
        ]
    ];

    public $newComment;
    
    public function addComments () {
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(), 
            'creator' => 'Kodes'
        ]);
        $this->newComment ="";
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
