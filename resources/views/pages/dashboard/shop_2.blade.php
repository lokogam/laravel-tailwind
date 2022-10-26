<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="mb-5">

            <!-- Title -->
            <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Find the right product for you ✨</h1>

        </div>

        <!-- Page content -->
        <div class="flex flex-col space-y-10 sm:flex-row sm:space-x-6 sm:space-y-0 md:flex-col md:space-x-0 md:space-y-10 xl:flex-row xl:space-x-6 xl:space-y-0 mt-9">

            <!-- Sidebar -->
            <x-dashboard.shop.shop-sidebar/>

            <!-- Content -->
            <div>

                <!-- Filters -->
                <div class="mb-5">
                    <ul class="flex flex-wrap -m-1">
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-transparent shadow-sm bg-indigo-500 text-white duration-150 ease-in-out">View All</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Featured</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Newest</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Price - Low To High</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Price - High to Low</button>
                        </li>
                    </ul>
                </div>

                <div class="text-sm text-gray-500 italic mb-4">67.975 Items</div>

                <!-- Cards 1 (Video Courses) -->
                <div>
                    <div class="grid grid-cols-12 gap-6">
                        <x-dashboard.shop.shop-cards-07/>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    <x-dashboard.pagination-classic/>
                </div>

            </div>

        </div>

    </div>
</x-app-layout>
