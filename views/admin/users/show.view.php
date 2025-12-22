<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/admin/users" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Staff List
            </a>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-200 rounded-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-900 mb-1">
                <?= htmlspecialchars($user['full_name']) ?>
            </h1>
            <p class="text-sm text-gray-500 mb-4">
                <?= htmlspecialchars($user['role']) ?>
            </p>

            <table class="min-w-full text-sm">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left w-48">User ID</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['user_id']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Email</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['email']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Username</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['username']) ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Phone Number</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['phone_number'] ?? 'N/A') ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Department</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['department'] ?? 'N/A') ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Position</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['position'] ?? 'N/A') ?>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-3 pr-4 font-medium text-gray-500 text-left">Role</th>
                        <td class="py-3 text-gray-900">
                            <?= htmlspecialchars($user['role']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex gap-3">
            <a href="/admin/users/edit?user_id=<?= htmlspecialchars($user['user_id']) ?>" 
               class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Edit Staff
            </a>

            <form method="POST" action="/admin/users/delete">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                <button type="submit"
                        onclick="return confirm('Are you sure you want to delete this staff member?')"
                        class="inline-flex items-center gap-2 rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete
                </button>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
