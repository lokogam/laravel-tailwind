<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Customers ✨</h1>
            </div>
            <x-dashboard.table-actions :dataFeed="$dataFeed"/>
        </div>

        <x-dashboard.customers.customers-table :dataFeed="$dataFeed"/>

        <div class="mt-8">
            <x-dashboard.pagination-classic :dataFeed="$dataFeed"/>
        </div>

    </div>
</x-app-layout>
