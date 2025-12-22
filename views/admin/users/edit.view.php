<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <form action="/admin/users/edit" method="POST" class="space-y-12">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">

                <?php if (!empty($errors)) : ?>
                    <div class="rounded-md bg-red-50 p-4">
                        <p class="text-sm text-red-800">Please fix the highlighted fields.</p>
                    </div>
                <?php endif; ?>

                <div class="border-b border-gray-400 pb-12">
                    <h1 class="text-base/12 font-semibold text-gray-900">Staff Information</h1>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- Full Name -->
                        <div class="sm:col-span-4">
                            <label for="full_name" class="block text-sm/6 font-medium text-gray-900">Full Name</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="full_name"
                                    id="full_name"
                                    value="<?= htmlspecialchars($_POST['full_name'] ?? $user['full_name'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['full_name']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['full_name'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['full_name']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Phone Number -->
                        <div class="sm:col-span-2">
                            <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                            <div class="mt-2">
                                <input
                                    type="tel"
                                    name="phone_number"
                                    id="phone_number"
                                    value="<?= htmlspecialchars($_POST['phone_number'] ?? $user['phone_number'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['phone_number']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                            <div class="mt-2">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="<?= htmlspecialchars($_POST['email'] ?? $user['email'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['email']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['email'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['email']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Username -->
                        <div class="sm:col-span-3">
                            <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    value="<?= htmlspecialchars($_POST['username'] ?? $user['username'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 <?= isset($errors['username']) ? 'outline-red-500 focus:outline-red-500' : 'outline-gray-300 focus:outline-indigo-600' ?> placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                            <?php if (isset($errors['username'])) : ?>
                                <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($errors['username']) ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Department -->
                        <div class="sm:col-span-3">
                            <label for="department" class="block text-sm/6 font-medium text-gray-900">Department</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="department"
                                    id="department"
                                    value="<?= htmlspecialchars($_POST['department'] ?? $user['department'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline-indigo-600 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                        </div>

                        <!-- Position -->
                        <div class="sm:col-span-3">
                            <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
                            <div class="mt-2">
                                <input
                                    type="text"
                                    name="position"
                                    id="position"
                                    value="<?= htmlspecialchars($_POST['position'] ?? $user['position'] ?? '') ?>"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline-indigo-600 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                />
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="sm:col-span-3">
                            <label for="role" class="block text-sm/6 font-medium text-gray-900">Role</label>
                            <div class="mt-2">
                                <select
                                    name="role"
                                    id="role"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline-indigo-600 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6"
                                >
                                    <option value="staff" <?= ($_POST['role'] ?? $user['role'] ?? '') === 'staff' ? 'selected' : '' ?>>staff</option>
                                    <option value="admin" <?= ($_POST['role'] ?? $user['role'] ?? '') === 'admin' ? 'selected' : '' ?>>admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/admin/users" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
