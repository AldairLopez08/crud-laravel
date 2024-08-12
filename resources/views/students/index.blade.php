<x-app-layout>
    <x-slot name="header">
        <a class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students List') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-3 mb-3 px-4 py-2 text-end">
                    <a class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                        href="{{route('students.create')}}"><i class="fa fa-plus px-1" style=" font-size: 14px;"></i>
                        Create</a>
                </div>
                <div class="px-4">
                    <table class="mt-3 mb-5 table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">NAME</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">AGE</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">GITHUB</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td class="border px-4 py-2 text-gray-700 dark:text-white text-center"
                                    style="border-style: dotted;">{{ $student-> id }}
                                </td>
                                <td class="border px-4 py-2 text-gray-700 dark:text-white text-center"
                                    style="border-style: dotted;">
                                    {{ $student->  nombre }}</td>
                                <td class="border px-4 py-2 text-gray-700 dark:text-white text-center"
                                    style="border-style: dotted;">{{ $student-> edad }}
                                </td>
                                <td class="border px-4 py-2 text-gray-700 dark:text-white text-center"
                                    style="border-style: dotted;">{{ $student-> github }}
                                </td>
                                <td class="border px-4 py-2 text-gray-700 dark:text-white text-center"
                                    style="border-style: dotted;">
                                    <a href="{{route('students.show', $student-> id)}}"
                                        class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        <i class="fa fa-eye" style=" font-size: 14px;"></i></a>
                                    <a href="{{route('students.edit', $student-> id)}}"
                                        class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"><i
                                            class="fa fa-edit" style=" font-size: 14px;"></i></a>
                                    <button type="button" onclick="confirmDelete(' {{ $student->id }} ')"
                                        class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"><i
                                            class="fa fa-trash" style=" font-size: 14px;"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
function confirmDelete(id) {
    alertify.confirm('<i class="fa fa-times-circle" style="color: red; font-size: 18px;"></i> Delete student',
        "Are you sure you want to delete this item?",
        function(e) {
            if (e) {
                let form = document.createElement('form')
                form.method = 'POST'
                form.action = `/students/${id}`
                form.innerHTML = '@csrf @method("DELETE")'
                document.body.appendChild(form)
                form.submit()
                alertify.success('Success');
            } else {
                return false
            }
        },
        function() {
            // alertify.error('Cancel');
        }).set('labels', {
        ok: 'Yes',
        cancel: 'No'
    })
}
</script>