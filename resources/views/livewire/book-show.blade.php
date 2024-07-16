<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
            <h1 class="text-center text-3xl font-bold mb-4">{{ $book->title }}</h1>
            <div class="mb-4">
                <p class="text-center text-gray-700">Author: <span class="font-semibold">{{ $book->author }}</span></p>
            </div>
            <div class="mb-4">
                <p class="text-center text-gray-700">Description:</p>
                <p class="text-center text-gray-600 font-semibold">{{ $book->description }}</p>
            </div>
            <div class="mb-4">
                <p class="text-center text-gray-700">Published Year: <span class="font-semibold">{{ $book->published_year }}</span></p>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md">Edit</a>
                <button wire:click="delete({{ $book->id }})" class="focus:outline-none bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-md">Delete</button>
            </div>
        </div>
    </div>
</div>