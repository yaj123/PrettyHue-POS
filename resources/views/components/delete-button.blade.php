<button {{$attributes -> merge(['class' => 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-2 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'])}}>
    {{ $slot }}

</button>
