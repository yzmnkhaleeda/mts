<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <form action="/suppliers/create" method="POST" class="space-y-12">

                <!-- Optional: show a generic message if there are any errors -->
                <?php if (!empty($errors)) : ?>
                    <div class="rounded-md bg-red-50 p-4">
                        <p class="text-sm text-red-800">Please fill in.</p>
                    </div>
                <?php endif; ?>

                <div class="border-b border-gray-400 pb-12">
                    <h1 class="text-base/12 font-semibold text-gray-900">Company Information</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Company Name -->
                        <div class="sm:col-span-4">
                            <label for="company_name" class="block text-sm/6 font-medium text-gray-900">Company Name</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="company_name"
                                    id="company_name"
                                    value="<?= htmlspecialchars($_POST['company_name'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_name']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                    />
                            </div>
                            <?php if (isset($errors['company_name'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_name']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Industry Type -->
                        <div class="sm:col-span-2">
                            <label for="industry_type" class="block text-sm/6 font-medium text-gray-900">Industry Type</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="industry_type"
                                    id="industry_type"
                                    value="<?= htmlspecialchars($_POST['industry_type'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['industry_type']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['industry_type'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['industry_type']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Company Phone -->
                        <div class="sm:col-span-3">
                            <label for="company_phone" class="block text-sm/6 font-medium text-gray-900">Company Phone</label>
                            <div class="mt-2">
                                <input
                                    type="tel"
                                    name="company_phone"
                                    id="company_phone"
                                    value="<?= htmlspecialchars($_POST['company_phone'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_phone']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['company_phone'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_phone']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Company Email -->
                        <div class="sm:col-span-3">
                            <label for="company_email" class="block text-sm/6 font-medium text-gray-900">Company Email</label>
                            <div class="mt-2">
                                <input
                                    type="email"
                                    name="company_email"
                                    id="company_email"
                                    value="<?= htmlspecialchars($_POST['company_email'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_email']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['company_email'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_email']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Address -->
                        <div class="col-span-full">
                            <label for="company_address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                            <div class="mt-2">
                                <textarea
                                    name="company_address"
                                    id="company_address"
                                    rows="3"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_address']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                ><?= htmlspecialchars($_POST['company_address'] ?? '') ?></textarea>
                            </div>
                            <?php if (isset($errors['company_address'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_address']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- City -->
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="company_city" class="block text-sm/6 font-medium text-gray-900">City</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="company_city"
                                    id="company_city"
                                    value="<?= htmlspecialchars($_POST['company_city'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_city']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['company_city'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_city']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- State -->
                        <div class="sm:col-span-2">
                            <label for="company_state" class="block text-sm/6 font-medium text-gray-900">State / Province</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="company_state"
                                    id="company_state"
                                    value="<?= htmlspecialchars($_POST['company_state'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_state']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['company_state'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_state']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Postcode -->
                        <div class="sm:col-span-2">
                            <label for="company_postcode" class="block text-sm/6 font-medium text-gray-900">Postcode</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="company_postcode"
                                    id="company_postcode"
                                    value="<?= htmlspecialchars($_POST['company_postcode'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['company_postcode']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['company_postcode'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['company_postcode']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Person In Charge Section -->
                <div class="border-b border-gray-400 pb-12">
                    <h1 class="text-base/12 font-semibold text-gray-900">Person In Charge</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <!-- PIC Name -->
                        <div class="sm:col-span-3">
                            <label for="pic_name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="pic_name"
                                    id="pic_name"
                                    value="<?= htmlspecialchars($_POST['pic_name'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['pic_name']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['pic_name'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['pic_name']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- PIC Phone -->
                        <div class="sm:col-span-3">
                            <label for="pic_phone" class="block text-sm/6 font-medium text-gray-900">Phone</label>
                            <div class="mt-2">
                                <input
                                    type="tel"
                                    name="pic_phone"
                                    id="pic_phone"
                                    value="<?= htmlspecialchars($_POST['pic_phone'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['pic_phone']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['pic_phone'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['pic_phone']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- PIC Email -->
                        <div class="col-span-full">
                            <label for="pic_email" class="block text-sm/6 font-medium text-gray-900">Email Address</label>
                            <div class="mt-2">
                                <input
                                    type="email"
                                    name="pic_email"
                                    id="pic_email"
                                    value="<?= htmlspecialchars($_POST['pic_email'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['pic_email']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['pic_email'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['pic_email']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Products Section -->
                <div class="pb-12">
                    <h1 class="text-base/12 font-semibold text-gray-900">Products</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Brands Supplied -->
                        <div class="sm:col-span-3">
                            <label for="brands_supplied" class="block text-sm/6 font-medium text-gray-900">Brands Supplied</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="brands_supplied"
                                    id="brands_supplied"
                                    value="<?= htmlspecialchars($_POST['brands_supplied'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['brands_supplied']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['brands_supplied'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['brands_supplied']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Items Supplied -->
                        <div class="sm:col-span-3">
                            <label for="items_supplied" class="block text-sm/6 font-medium text-gray-900">Items Supplied</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="items_supplied"
                                    id="items_supplied"
                                    value="<?= htmlspecialchars($_POST['items_supplied'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['items_supplied']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['items_supplied'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['items_supplied']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/suppliers" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
