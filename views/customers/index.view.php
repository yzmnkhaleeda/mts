<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Header with Add Button -->
        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">Customers</h2>
            <a href="/customers/create" 
               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Register New Customer
            </a>
        </div>

        <!-- Customers Grid -->
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($customers as $customer) : ?>
                <a href="/customer?customer_id=<?= $customer['customer_id'] ?>"
                   class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg hover:border-blue-500 transition-all duration-200">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                <?= htmlspecialchars($customer['company_name'])?>
                            </h3>
                            <div class="text-sm text-gray-500">
                                <p><?= htmlspecialchars($customer['full_name'] ?? 'N/A') ?></p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            <?php endforeach ?>
        </div>

        <?php if (empty($customers)) : ?>
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No customers</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by registering a new customer.</p>
            </div>
        <?php endif ?>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
