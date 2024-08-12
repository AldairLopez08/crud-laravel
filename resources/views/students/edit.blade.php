<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <form method="POST" action="{{route('students.update', $student-> id)}}">
                        <div
                            class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            @csrf
                            @method('PUT')
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name"> Name
                            </label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" placeholder="Name" required id="name" name="nombre"
                                value="{{ old('name', $student-> nombre) }}">
                            <label class="mt-3 block font-medium text-sm text-gray-700 dark:text-gray-300" for="age">
                                Age
                            </label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="number" placeholder="Age" required id="age" name="edad"
                                value="{{ old('edad',$student-> edad) }}">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name"> GitHub
                            </label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" placeholder="GitHub" required id="github" name="github"
                                value="{{ old('name', $student-> github) }}">

                            <div class="mt-3 mb-3 px-4 py-2 text-end">
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Update
                                </button>
                                <a class="inline-flex items-center justify-center px-4 py-2 bg-grey-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-grey-500 active:bg-grey-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                    href="{{route('students.index')}}">
                                    Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>