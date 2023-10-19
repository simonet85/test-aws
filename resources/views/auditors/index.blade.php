<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
    </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Liste des Auditeurs</h1>

            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-300 text-left">Nom</th>
                        <th class="px-6 py-3 bg-gray-300 text-left">Prénom</th>
                        <th class="px-6 py-3 bg-gray-300 text-left">Email</th>
                        <th class="px-6 py-3 bg-gray-300 text-left">Numéro de Téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($auditors as $auditor)
                    <tr>
                        <td class="px-6 py-4">{{ $auditor->nom }}</td>
                        <td class="px-6 py-4">{{ $auditor->prenom }}</td>
                        <td class="px-6 py-4">{{ $auditor->email }}</td>
                        <td class="px-6 py-4">{{ $auditor->telephone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $auditors->links() }}
        </div>
    </div>
</x-app-layout>
