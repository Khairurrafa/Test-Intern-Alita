<x-layout>
    <div class="w-full mx-auto max-w-screen-xl pt-28 md:flex md:items-center md:justify-between">
        <h1 class="text-4xl font-bold text-gray-800">Data Lokasi</h1>
        <div class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <form class="max-w-md mx-auto" method="GET" action="{{ route('locations.index') }}">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-orange-500 focus:border-orange-500 dark:bg-white dark:border-orange-600 dark:placeholder-orange-400 dark:text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500 box-primary" placeholder="Search..." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium text-sm px-4 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="max-w-screen-xl mt-10 mx-auto relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-orange-400 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <a href="{{ route('locations.index', ['sort_by' => 'code', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
                            Kode Lokasi
                            @if($sort_by == 'code')
                                <span>{{ $order == 'asc' ? '▲' : '▼' }}</span>
                            @endif
                        </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <a href="{{ route('locations.index', ['sort_by' => 'name', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
                            Lokasi
                            @if($sort_by == 'name')
                                <span>{{ $order == 'asc' ? '▲' : '▼' }}</span>
                            @endif
                        </a>
                    </th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($locations as $location)
                    <tr class="odd:bg-white odd:dark:bg-orange-100 even:bg-gray-50 even:dark:bg-orange-200 border-b dark:border-orange-500 text-gray-900">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $location->code }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $location->name }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('locations.edit', $location->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                            <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-blue-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="max-w-screen-xl mx-auto pt-10 flex flex-row items-end justify-end">
        <a href="{{ route('locations.create') }}" class="box-primary text-orange-500 hover:text-white border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold text-xl px-10 py-3 text-center me-2 mb-2 dark:border-orange-500 dark:text-orange-500 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-500">Tambah Data</a>
    </div>

    <x-footer></x-footer>
</x-layout>
