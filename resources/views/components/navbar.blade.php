<nav
class="bg-white fixed w-full z-20 top-0 start-0 border-b border-orange-500 dark:border-orange-500"
>
<div
    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5"
>
    <a
        href="https://flowbite.com/"
        class="flex items-center space-x-3 rtl:space-x-reverse"
    >
        <span
            class="self-center font-bold text-3xl whitespace-nowrap text-orange-500"
            >MEKARI</span
        >
    </a>

    <div
        class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
        id="navbar-sticky"
    >
        <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white  dark:border-gray-700"
        >
            <li>
                <a
                    href="/"
                    class="{{ request()->is('/') ? 'text-orange-500 font-semibold' : 'text-black' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700 text-ms"
                    >Beranda</a>
            </li>
            <li>
                <a
                    href="/employees"
                    class="{{ request()->is('employees') ? 'text-orange-500 font-semibold' : 'text-black' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700 text-ms"
                    >Karyawan</a>
            </li>
            <li>
                <a
                    href="/locations"
                    class="{{ request()->is('locations') ? 'text-orange-500 font-semibold' : 'text-black' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700 text-ms"
                    >Lokasi</a>
            </li>

        </ul>
    </div>
</div>
</nav>