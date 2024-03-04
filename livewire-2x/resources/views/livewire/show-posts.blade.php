<div>
    <button wire:click="like">Click Here to Like Post</button>



    <form wire:submit.prevent="submit">
    ...
        <button>Submit Like Post</button>
    </form>


<button wire:click="$emit('postAdded')">Emit Like Post</button>

<form wire:submit.prevent="update">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
 
    Title: <input wire:model="post.title" type="text">
 
    <button>Save</button>
</form>
</div>



