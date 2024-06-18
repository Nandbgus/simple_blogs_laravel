<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-2xl font-bold mb-4">Ini Halaman About</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border-b">Nama</th>
                    <th class="px-4 py-2 border-b">Username</th>
                    <th class="px-4 py-2 border-b">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->username }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>