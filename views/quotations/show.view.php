<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl">
            <div class="mb-6">
                <a href="/quotations" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Quotations
                </a>
            </div>

            <!-- Quotation Details -->
            <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        <?= htmlspecialchars($quotation['title']) ?>
                    </h1>
                    


                    <div class="prose prose-sm max-w-none mb-8">
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Notes</h3>
                        <pre class="bg-gray-50 p-4 rounded-md border border-gray-200 text-gray-700 overflow-x-auto"><?= htmlspecialchars($quotation['notes'] ?: 'No notes') ?></pre>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-4">
                        <a href="/quotation/edit?quotation_id=<?= $quotation['quotation_id'] ?>" 
                           class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Edit
                        </a>
                        <form action="/quotation" method="POST" onsubmit="return confirm('Are you sure you want to delete this quotation?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="quotation_id" value="<?= $quotation['quotation_id'] ?>">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
