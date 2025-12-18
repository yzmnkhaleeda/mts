<?php require base_path('views/partials/header.php'); ?>

<div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <!-- Logo Section -->
    <div class="flex flex-col items-center">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="MTS" class="h-12 w-12">
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
        Sign in to MTS
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">MTS</p>
    </div>

    <!-- Form -->
    <form class="space-y-6" action="/sessions" method="POST">
      <?php if (!empty($errors['login'])) : ?>
        <div class="rounded-md bg-red-50 p-4">
          <p class="text-sm text-red-800"><?= htmlspecialchars($errors['login']) ?></p>
        </div>
      <?php endif; ?>

      <?php if (!empty($errors['password'])) : ?>
        <div class="rounded-md bg-red-50 p-4">
          <p class="text-sm text-red-800"><?= htmlspecialchars($errors['password']) ?></p>
        </div>
      <?php endif; ?>

      <!-- Email or Username -->
      <div>
        <label for="login" class="block text-sm font-medium text-gray-700">
          Email or Username
        </label>
        <input
          id="login"
          name="login"
          type="text"
          autocomplete="username"
          required
          value="<?= htmlspecialchars($_POST['login'] ?? '') ?>"
          class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
          placeholder="you@example.com or yourusername"
        />
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">
          Password
        </label>
        <input
          id="password"
          name="password"
          type="password"
          autocomplete="current-password"
          required
          class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
          placeholder="Password"
        />
      </div>

      <!-- Submit Button -->
      <div>
        <button
          type="submit"
          class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
          Sign in
        </button>
      </div>
    </form>
  </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>
