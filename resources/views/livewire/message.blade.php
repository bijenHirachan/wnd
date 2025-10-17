<div>
    <h3 class="py-8 text-center text-2xl">Feedback</h3>

    @session('message')
        <div class="max-w-sm mx-auto mb-4 p-4 text-green-800 rounded-lg bg-green-50" role="alert">
            {{ session('message') }}
        </div>
    @endsession

    <form wire:submit="submit" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="johndoe@example.com" required />
        </div>
         <div>
            @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
            <textarea wire:model="body" placeholder="Message here..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required ></textarea>
        </div>
        <div>
            @error('body') <span class="text-sm text-red-500">{{ $message }}</span> @enderror 
        </div>

        <button type="submit" class="text-white cursor-pointer bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
