<x-layout>
    <div class="w-full mx-auto max-w-screen-xl pt-28">
        <h1 class="text-4xl font-bold text-gray-800">Ubah Data Karyawan</h1>
    </div>
  
  
    <form class="max-w-sm mx-auto pt-10"  action="{{ route('employees.update', $employee->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama</label>
      <input type="text" name="name" id="name" value="{{ $employee->name }}"  class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Nama" required />
    </div>
    <div class="mb-5">
      <label for="location_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Select an option</label>
      <select id="location_id" name="location_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Select Location</option>
        @foreach($locations as $location)
        <option value="{{ $location->id }}" {{ $location->id == $employee->location_id ? 'selected' : '' }}>
            {{ $location->name }}
        </option>
    @endforeach
      </select>
    </div>
    <div class="mb-5">
      <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Tanggal Lahir</label>
      <input type="date" name="birth_date" id="birth_date" value="{{ $employee->birth_date }}" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500" required />
    </div>
    <button type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Ubah Data</button>
  </form>
  
  </x-layout>