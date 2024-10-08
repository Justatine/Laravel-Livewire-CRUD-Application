<form>
    <div class="form-group mb-3">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title:</label>
        <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') is-invalid @enderror" placeholder="Enter post title" wire:model="title" required />
        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content:</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('content') is-invalid @enderror"  placeholder="Enter post content..." wire:model="content"></textarea>
        @error('content') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
</form>