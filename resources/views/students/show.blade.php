<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Information</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Welcome to {{ $student->nombre }}'s profile.
                            </p>
                            <div class="py-1 px-4">
                                <img src="https://unavatar.io/gitHub/{{ $student->github }}" class="mt-3"
                                    style="width: 124px; height: 124px; border-radius: 50%; margin-right: 8px;">
                            </div>
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                for="name">Name</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" value="{{ $student->nombre }}" readonly>

                            <label class="mt-3 block font-medium text-sm text-gray-700 dark:text-gray-300"
                                for="age">Age</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" value="{{ $student->edad }}" readonly>

                            <label class="mt-3 block font-medium text-sm text-gray-700 dark:text-gray-300"
                                for="age">GitHub</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" value="{{ $student->github }}" readonly>

                            <label class="mt-3 block font-medium text-sm text-gray-700 dark:text-gray-300"
                                for="age">Created_at</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" value="{{ $student->created_at }}" readonly>

                            <label class="mt-3 block font-medium text-sm text-gray-700 dark:text-gray-300"
                                for="age">Updated_at</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                type="text" value="{{ $student->updated_at }}" readonly>

                            <div class="mt-3 mb-3 px-4 py-2 text-end">
                                <a class="inline-flex items-center justify-center px-4 py-2 bg-grey-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-grey-500 active:bg-grey-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                    href="{{route('students.index')}}">
                                    Cancel</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</x-app-layout>