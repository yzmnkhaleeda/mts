<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<?php require 'partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <!-- Dashboard Grid -->
            <div class="mb-8">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="rounded-lg bg-white p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Total Suppliers</p>
                                <p class="text-2xl font-semibold text-gray-900">24</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="rounded-lg bg-white p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-md bg-green-500">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Active</p>
                                <p class="text-2xl font-semibold text-gray-900">18</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="rounded-lg bg-white p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-md bg-yellow-500">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Pending</p>
                                <p class="text-2xl font-semibold text-gray-900">6</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="rounded-lg bg-white p-6 shadow">
                        <div class="flex items-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-md bg-red-500">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Inactive</p>
                                <p class="text-2xl font-semibold text-gray-900">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Tables -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <!-- Main chart -->
                <div class="lg:col-span-2 rounded-lg bg-white p-6 shadow">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Supplier Activity</h2>
                    <div class="h-64 w-full bg-gray-50 rounded flex items-center justify-center text-gray-400">
                        [Chart Placeholder]
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="rounded-lg bg-white p-6 shadow">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h2>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-200">
                            <div class="h-2 w-2 rounded-full bg-green-500"></div>
                            <div class="flex-1 text-sm">
                                <p class="font-medium text-gray-900">New supplier added</p>
                                <p class="text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-200">
                            <div class="h-2 w-2 rounded-full bg-blue-500"></div>
                            <div class="flex-1 text-sm">
                                <p class="font-medium text-gray-900">Profile updated</p>
                                <p class="text-gray-500">5 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-200">
                            <div class="h-2 w-2 rounded-full bg-yellow-500"></div>
                            <div class="flex-1 text-sm">
                                <p class="font-medium text-gray-900">Review pending</p>
                                <p class="text-gray-500">1 day ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="h-2 w-2 rounded-full bg-purple-500"></div>
                            <div class="flex-1 text-sm">
                                <p class="font-medium text-gray-900">Data export completed</p>
                                <p class="text-gray-500">2 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="mt-6 rounded-lg bg-white shadow">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Top Suppliers</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Company Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Contact
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rating
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    Tech Solutions Inc.
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    contact@tech.com
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    4.8 / 5
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    Global Parts Co.
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    info@globalparts.com
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    4.5 / 5
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    Premium Supply
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    <span class="inline-flex rounded-full bg-yellow-100 px-2 text-xs font-semibold text-yellow-800">
                                        Pending
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    sales@premium.com
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    4.2 / 5
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    Quick Trade Ltd.
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    hello@quicktrade.com
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                    4.6 / 5
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>
