<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Campaigns ✨</h1>
            </div>

            <!-- Right: Actions -->
            <x-dashboard.campaigns.campaigns-actions />

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Campaign cards -->
            <x-dashboard.campaigns.campaigns-cards />

        </div>

        <!-- Pagination -->
        <div class="mt-8">
            <x-dashboard.pagination-numeric/>
        </div>

    </div>
</x-app-layout>
