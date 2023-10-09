<div>
    @if($successMessage)
        <div class="alert alert-success" role="alert">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" rows="3" wire:model="content"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
        <button type="button" class="btn btn" wire:click="resetForm">Reset</button>
    </form>
</div>
