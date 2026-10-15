<x-admin.layout>
    <section class="mx-auto max-w-screen-xl">
        <div class="mb-6 flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Daftar kelas yang terdaftar.</p>
            </div>
        </div>

        <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Major</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($classroom as $index => $item)
                            <tr class="border-b last:border-b-0 dark:border-gray-700">
                                <td class="whitespace-nowrap px-6 py-4">{{ $index + 1 }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                                <td class="px-6 py-4">{{ $item->major }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">Belum ada data classroom.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin.layout>
