<section class="bg-gray-300/30 py-8">
        <div class="max-w-6xl my-4 p-8 mx-auto bg-white  rounded-3xl">

        <div class="flex items-center justify-between py-4">
          
            <h3 class="text-2xl font-semibold">Menu</h3>

                <select wire:model.live="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="all">All</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            
        </div>



            <div class='grid sm:grid-cols-2 lg:grid-cols-4 gap-y-8 gap-x-5'>
                @foreach ($foodItems as $item)
                    <div class='relative shadow-lg h-[150px] sm:h-[356px] bg-pink-100/20 rounded-3xl'>
                        @if($item->image_url)
                            <img src="{{ asset('storage/' . $item->image_url) }}" class="object-cover w-full h-full rounded-3xl" />
                        @else
                            <img src="/img/noimage.png" class="object-cover w-full h-full rounded-3xl" />
                        @endif
                        <div class="absolute bottom-0 flex flex-col items-center justify-center w-full p-2 tracking-wide text-white sm:p-4 bg-slate-900/50 rounded-b-3xl">
                            <h3 class="text-sm font-semibold sm:text-xl text-center">{{ $item->name }}</h3>
                            <p class="text-xs text-center sm:text-sm">{{ $item->description }}</p>
                            <h3 class="mt-2 text-sm sm:text-2xl">€ {{ $item->price }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        
</section>
