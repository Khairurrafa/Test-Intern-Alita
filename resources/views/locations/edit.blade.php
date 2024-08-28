<x-layout>
    <div class="w-full mx-auto max-w-screen-xl pt-28">
        <h1 class="text-4xl font-bold text-gray-800">Ubah Data Lokasi</h1>
    </div>
  
  
    <form class="max-w-sm mx-auto pt-10" action="{{ route('locations.update', $location->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-5">
      <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Kode Lokasi</label>
      <input type="text" name="code" id="code" value="{{ $location->code }}" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Kode" required />
    </div>
    <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lokasi</label>
      <input type="text" name="name" id="name" value="{{ $location->name }}" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Nama" required />
    </div>
    <button type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Ubah Data</button>
  </form>
  
  </x-layout>