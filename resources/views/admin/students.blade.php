<x-admin.layout>
    <section class="mx-auto max-w-screen-xl">
        <div class="mb-6 flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Students</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Daftar siswa yang terdaftar.</p>
            </div>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Student
            </button>
        </div>

        <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">NIS</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Classroom</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                            <tr class="border-b last:border-b-0 dark:border-gray-700">
                                <td class="whitespace-nowrap px-6 py-4">{{ $index + 1 }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $student['nis'] }}</td>
                                <td class="px-6 py-4">{{ $student['name'] }}</td>
                                <td class="px-6 py-4">{{ $student['classroom'] }}</td>
                                <td class="px-6 py-4">
                                    @if ($student['status'] === 'Active')
                                        <span class="inline-flex items-center rounded-full bg-green-900 px-3 py-1 text-sm font-medium text-green-300">
                                            Active
                                        </span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-red-900 px-3 py-1 text-sm font-medium text-red-300">
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin.layout>
