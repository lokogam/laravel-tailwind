<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-5">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Invoices ✨</h1>
            </div>

            <!-- Right: Actions -->
            <x-dashboard.invoices.invoices-actions/>

        </div>

        <!-- More actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-5">

            <!-- Left side -->
            <div class="mb-4 sm:mb-0">
                <ul class="flex flex-wrap -m-1">
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-transparent shadow-sm bg-indigo-500 text-white duration-150 ease-in-out">All <span class="ml-1 text-indigo-200">67</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Paid <span class="ml-1 text-gray-400">14</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Due <span class="ml-1 text-gray-400">34</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-gray-200 hover:border-gray-300 shadow-sm bg-white text-gray-500 duration-150 ease-in-out">Overdue <span class="ml-1 text-gray-400">19</span></button>
                    </li>
                </ul>
            </div>

            <!-- Right side -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Delete button -->
                <div class="table-items-action hidden">
                    <div class="flex items-center">
                        <div class="hidden xl:block text-sm italic mr-2 whitespace-nowrap"><span class="table-items-count"></span> items selected</div>
                        <button class="btn bg-white border-gray-200 hover:border-gray-300 text-red-500 hover:text-red-600">Delete</button>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="relative" x-data="{ open: false, selected: 2 }">
                    <button
                        class="btn justify-between min-w-44 bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600"
                        aria-label="Select date range"
                        aria-haspopup="true"
                        @click.prevent="open = !open"
                        :aria-expanded="open"
                    >
                        <span class="flex items-center">
                            <svg class="w-4 h-4 fill-current text-gray-500 shrink-0 mr-2" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z" />
                            </svg>
                            <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                        </span>
                        <svg class="shrink-0 ml-1 fill-current text-gray-400" width="11" height="7" viewBox="0 0 11 7">
                            <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z" />
                        </svg>
                    </button>
                    <div
                        class="z-10 absolute top-full right-0 w-full bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                        @click.outside="open = false"
                        @keydown.escape.window="open = false"
                        x-show="open"
                        x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-out duration-100"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        x-cloak
                    >
                        <div class="font-medium text-sm text-gray-600" x-ref="options">
                            <button
                                tabindex="0"
                                class="flex items-center w-full hover:bg-gray-50 py-1 px-3 cursor-pointer"
                                :class="selected === 0 && 'text-indigo-500'"
                                @click="selected = 0;open = false"
                                @focus="open = true"
                                @focusout="open = false"
                            >
                                <svg class="shrink-0 mr-2 fill-current text-indigo-500" :class="selected !== 0 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z" />
                                </svg>
                                <span>Today</span>
                            </button>
                            <button
                                tabindex="0"
                                class="flex items-center w-full hover:bg-gray-50 py-1 px-3 cursor-pointer"
                                :class="selected === 1 && 'text-indigo-500'"
                                @click="selected = 1;open = false"
                                @focus="open = true"
                                @focusout="open = false"
                            >
                                <svg class="shrink-0 mr-2 fill-current text-indigo-500" :class="selected !== 1 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z" />
                                </svg>
                                <span>Last 7 Days</span>
                            </button>
                            <button
                                tabindex="0"
                                class="flex items-center w-full hover:bg-gray-50 py-1 px-3 cursor-pointer"
                                :class="selected === 2 && 'text-indigo-500'"
                                @click="selected = 2;open = false"
                                @focus="open = true"
                                @focusout="open = false"
                            >
                                <svg class="shrink-0 mr-2 fill-current text-indigo-500" :class="selected !== 2 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z" />
                                </svg>
                                <span>Last Month</span>
                            </button>
                            <button
                                tabindex="0"
                                class="flex items-center w-full hover:bg-gray-50 py-1 px-3 cursor-pointer"
                                :class="selected === 3 && 'text-indigo-500'"
                                @click="selected = 3;open = false"
                                @focus="open = true"
                                @focusout="open = false"
                            >
                                <svg class="shrink-0 mr-2 fill-current text-indigo-500" :class="selected !== 3 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z" />
                                </svg>
                                <span>Last 12 Months</span>
                            </button>
                            <button
                                tabindex="0"
                                class="flex items-center w-full hover:bg-gray-50 py-1 px-3 cursor-pointer"
                                :class="selected === 4 && 'text-indigo-500'"
                                @click="selected = 4;open = false"
                                @focus="open = true"
                                @focusout="open = false"
                            >
                                <svg class="shrink-0 mr-2 fill-current text-indigo-500" :class="selected !== 4 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z" />
                                </svg>
                                <span>All Time</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Filter button -->
                <div class="relative inline-flex">
                    <button
                        class="btn bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600">
                        <span class="sr-only">Filter</span><wbr>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <!-- Table -->
        <x-dashboard.invoices.invoices-table :dataFeed="$dataFeed"/>
        <x-dashboard.pagination-classic :dataFeed="$dataFeed"/>

    </div>
</x-app-layout>
