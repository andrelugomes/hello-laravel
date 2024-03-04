<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ShowPosts extends Component
{
    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function like()
    {
        Log::info("like", $this->memory());
    }

    public function submit()
    {
        Log::info("submit", $this->memory());
    }
 
    public function incrementPostCount()
    {        
        Log::info("postAdded -> incrementPostCount", $this->memory());

        $i = 1;
        while ($i < 100) {
            $i++;
            ${$i} = file_get_contents('/home/arquivo-grande-de-1-5mb.jpg'); //1.5MB
        }

        
        Log::info("postAdded -> incrementPostCount after", $this->memory());

    }

    public function update()
    {
        Log::info("update", $this->memory());
        session()->flash('message', 'Post successfully updated.');
        Log::info("update after", $this->memory());
    }

    function memory() {
        //Returns the amount of memory allocated to PHP
        $used_memory  = $this->convert(memory_get_usage(false)); //if not set or false only the used memory is reported. 
        $real_usage = $this->convert(memory_get_usage(true));  //Set this to true to get total memory allocated from system, including unused pages
        //Returns the peak of memory, in bytes, that's been allocated to your PHP script.
        $used_memory_peek  = $this->convert(memory_get_peak_usage(false));//If not set or false only the memory used by emalloc() is reported.
        $real_usage_peek = $this->convert(memory_get_peak_usage(true)); //Set this to true to get the real size of memory allocated from system

        return [
            'used_memory' => $used_memory, 
            'real_usage' => $real_usage, 
            'used_memory_peek'=> $used_memory_peek, 
            'real_usage_peek' => $real_usage_peek
        ];
    }

    function convert($size)
    {
        $unit=array('b','kb','mb','gb','tb','pb');
        return round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }
}
