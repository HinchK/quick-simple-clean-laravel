<div>
    <button
        class="btn-todo btn-purple mb-2 sm:mb-0 mr-2"
        wire:click.stop="$emitTo('task-form', 'taskEditing', {{$this->task->id}})">
        <x-icons.edit></x-icons.edit>
    </button>
</div>
