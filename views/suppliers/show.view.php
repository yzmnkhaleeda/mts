<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/suppliers" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Supplier List
            </a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 mb-1">
                <?= htmlspecialchars($supplier['company_name']) ?>
            </h1>
            <p class="text-sm text-gray-500 mb-4">
                Supplier ID: <?= htmlspecialchars($supplier['supplier_id']) ?>
            </p>

            <table class="min-w-full text-sm">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left w-48">Industry Type</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['industry_type']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left align-top">Company Address</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['company_address']) ?><br>
                            <?= htmlspecialchars($supplier['company_postcode']) ?>
                            <?= htmlspecialchars($supplier['company_city']) ?>,
                            <?= htmlspecialchars($supplier['company_state']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Company Phone</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['company_phone']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Company Email</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['company_email']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Name</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['pic_name']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Phone</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['pic_phone']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Email</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['pic_email']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Brands Supplied</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['brands_supplied']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Items Supplied</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($supplier['items_supplied']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

                <div class="mt-6 flex gap-3">
            <a href="/suppliers/edit?supplier_id=<?= htmlspecialchars($supplier['supplier_id']) ?>" 
               class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Edit Supplier
            </a>
        </div>

    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
