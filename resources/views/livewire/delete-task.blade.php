<div>
    <button class="btn-todo btn-red mb-2 sm:mb-0"
            wire:click.stop="$emitTo('task-form', 'taskRemove', {{$this->task->id}})" wire:loading.attr="disabled">
        <x-icons.trash></x-icons.trash>
    </button>
</div>
