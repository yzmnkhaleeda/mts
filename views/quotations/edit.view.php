<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl">
            <form action="/quotation/edit?quotation_id=<?= $quotation['quotation_id'] ?>" method="POST" class="space-y-12">

                <input type="hidden" name="_method" value="PATCH">

                <!-- Optional: show a generic message if there are any errors -->
                <?php if (!empty($errors)) : ?>
                    <div class="rounded-md bg-red-50 p-4">
                        <p class="text-sm text-red-800">Please fill in all required fields.</p>
                    </div>
                <?php endif; ?>

                <div class="border-b border-gray-400 pb-12">
                    <h1 class="text-base/12 font-semibold text-gray-900">Edit Quotation</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Title -->
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="<?= htmlspecialchars($_POST['title'] ?? $quotation['title']) ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['title']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                    required
                                />
                            </div>
                            <?php if (isset($errors['title'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['title']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Notes -->
                        <div class="sm:col-span-6">
                            <label for="notes" class="block text-sm/6 font-medium text-gray-900">Notes</label>
                            <div class="mt-2">
                                <textarea
                                    name="notes"
                                    id="notes"
                                    rows="6"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['notes']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                ><?= htmlspecialchars($_POST['notes'] ?? $quotation['notes']) ?></textarea>
                            </div>
                            <?php if (isset($errors['notes'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['notes']) ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                        Update Quotation
                    </button>
                    <a href="/quotation?quotation_id=<?= $quotation['quotation_id'] ?>" class="px-4 py-2 bg-gray-200 text-gray-900 text-sm font-medium rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-colors">
                        Cancel
                    </a>
                </div>

            </form>
        </div>
    </div>
</main>
