<div>
    <h1 class="text-2xl font-bold mb-4">{{ $bookId ? 'Edit Book' : 'Add New Book' }}</h1>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" wire:model="title" id="title" class="w-full px-4 py-2 border rounded-md @error('title') border-red-500 @enderror">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="author" class="block text-gray-700">Author</label>
            <input type="text" wire:model="author" id="author" class="w-full px-4 py-2 border rounded-md @error('author') border-red-500 @enderror">
            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea wire:model="description" id="description" class="w-full px-4 py-2 border rounded-md @error('description') border-red-500 @enderror"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="published_year" class="block text-gray-700">Published Year</label>
            <input type="number" wire:model="published_year" id="published_year" class="w-full px-4 py-2 border rounded-md @error('published_year') border-red-500 @enderror">
            @error('published_year') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ $bookId ? 'Update' : 'Save' }}</button>
        </div>
    </form>
</div>
