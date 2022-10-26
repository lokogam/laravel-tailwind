<div class="flex flex-col col-span-full xl:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
    <header class="px-5 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Active Users Right Now</h2>
    </header>
    <!-- Card content -->
    <div class="flex flex-col h-full">
        <!-- Live visitors number -->
        <div class="px-5 py-3">
            <div class="flex items-center">
                <!-- Red dot -->
                <div class="relative flex items-center justify-center w-4 h-4 rounded-full bg-red-100 mr-3" aria-hidden="true">
                    <div class="absolute w-1.5 h-1.5 rounded-full bg-red-500"></div>
                </div>
                <!-- Vistors number -->
                <div>
                    <div class="text-3xl font-bold text-gray-800 mr-2">347</div>
                    <div class="text-sm text-gray-500">Live visitors</div>
                </div>
            </div>
        </div>

        <!-- Chart built with Chart.js 3 -->
        <!-- Check out src/js/components/analytics-card-02.js for config -->
        <div>
            <!-- Change the height attribute to adjust the chart height -->
            <canvas id="analytics-card-02" width="389" height="70"></canvas>
        </div>
        
        <!-- Table -->
        <div class="grow px-5 pt-3 pb-1">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-gray-400">
                        <tr>
                            <th class="py-2">
                                <div class="font-semibold text-left">Top pages</div>
                            </th>
                            <th class="py-2">
                                <div class="font-semibold text-right">Active users</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm divide-y divide-gray-100">
                        <!-- Row -->
                        <tr>
                            <td class="py-2">
                                <div class="text-left">preview.cruip.com/open-pro/</div>
                            </td>
                            <td class="py-2">
                                <div class="font-medium text-right text-gray-800">94</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="py-2">
                                <div class="text-left">preview.cruip.com/simple/</div>
                            </td>
                            <td class="py-2">
                                <div class="font-medium text-right text-gray-800">42</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="py-2">
                                <div class="text-left">cruip.com/unlimited/</div>
                            </td>
                            <td class="py-2">
                                <div class="font-medium text-right text-gray-800">12</div>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="py-2">
                                <div class="text-left">preview.cruip.com/twist/</div>
                            </td>
                            <td class="py-2">
                                <div class="font-medium text-right text-gray-800">4</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card footer -->
        <div class="text-right px-5 pb-4">
            <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Real-Time Report -&gt;</a>
        </div>
    </div>
</div>