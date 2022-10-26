<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Analytics ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Datepicker built with flatpickr -->
                <div class="relative">
                    <input class="datepicker form-input pl-9 text-gray-500 hover:text-gray-600 font-medium focus:border-gray-300 w-60" placeholder="Select dates" data-class="flatpickr-right" />
                    <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
                        <svg class="w-4 h-4 fill-current text-gray-500 ml-3" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z" />
                        </svg>
                    </div>
                </div>

            </div>

        </div>
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Line chart (Acme Plus) -->
            <x-dashboard.analytics.analytics-card-01 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-02 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-03 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-04 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-05 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-06 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-07 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-08 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-09 :dataFeed="$dataFeed"/>

            <x-dashboard.analytics.analytics-card-10 :dataFeed="$dataFeed"/>

        </div>

    </div>
</x-app-layout>
