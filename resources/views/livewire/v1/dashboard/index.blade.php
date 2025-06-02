<div class="flex  w-full flex-1 flex-col rounded-xl">



    <div wire:loading
        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
        <div class="flex items-center space-x-2 text-white p-4 rounded shadow">
            <svg class="animate-spin h-6 w-6 text-white-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
            </svg>
            <span class="text-white-800 font-medium">Loading...</span>
        </div>
    </div>
    <div class="grid auto-rows-min gap-5 grid-cols-1">
        <div class="relative overflow-x-auto  p-3 rounded-md border border-gray-900">
            <table wire:poll.60s class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-200">
                <thead class="text-xs uppercase bg-gray-100 dark:bg-neutral-900 text-gray-700 dark:text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">Cryptocurrency</th>
                    <th scope="col" class="px-6 py-3">Icon</th>
                    <th scope="col" class="px-6 py-3">Price (USD)</th>
                    <th scope="col" class="px-6 py-3">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($this->crypto() as $crypto)
                <tr class="bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 transition-colors duration-200 hover:dark:bg-neutral-700 hover:bg-gray-50">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $crypto->name }}</th>
                    <td class="px-6 py-4">
                        <img src="{{ $crypto->image }}" alt="{{ $crypto->name }} logo" class="w-8 h-8 inline mr-2">
                    </td>
                    <td class="px-6 py-4">${{ number_format($crypto->price,7, '.', ',') }}</td>
                    <td class="px-6 py-4">{{ $crypto->retrieved_at}}</td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
