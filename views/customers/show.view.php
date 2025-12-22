<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/customers" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Customer List
            </a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 mb-1">
                <?= htmlspecialchars($customer['company_name']) ?>
            </h1>
            <p class="text-sm text-gray-500 mb-4">
                Staff: <?= htmlspecialchars($customer['full_name'] ?? 'N/A') ?>
            </p>

            <table class="min-w-full text-sm">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left w-48">Customer ID</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['customer_id']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left w-48">Industry Type</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['industry_type']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left align-top">Company Address</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['company_address']) ?><br>
                            <?= htmlspecialchars($customer['company_postcode']) ?>
                            <?= htmlspecialchars($customer['company_city']) ?>,
                            <?= htmlspecialchars($customer['company_state']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Company Phone</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['company_phone']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Company Email</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['company_email']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Name</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['pic_name']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Phone</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['pic_phone']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Email</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['pic_email']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">PIC Position</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['pic_position']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Category</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['category']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Category Details</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($customer['category_details']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php if ($customer['user_id'] === $currentUserId) : ?>
                <div class="mt-6 flex gap-3">
            <a href="/customers/edit?customer_id=<?= htmlspecialchars($customer['customer_id']) ?>" 
               class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Edit
            </a>

            <form method="POST" action="/customer">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="customer_id" value="<?= $customer['customer_id'] ?>">
                <button type="submit"
                        onclick="return confirm('Are you sure you want to delete this customer?')"
                        class="inline-flex items-center gap-2 rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete
                </button>
            </form>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
