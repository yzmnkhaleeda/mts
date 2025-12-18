<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>

<main class="mx-auto max-w-xl p-6">
  <h1 class="text-2xl font-bold mb-4">Create Staff Account</h1>

  <form method="POST" action="/admin/users" class="space-y-4">
    <div>
      <label class="block mb-1">Full Name</label>
      <input name="full_name" class="w-full border p-2 rounded">
      <?php if (!empty($errors['full_name'])): ?><p class="text-red-600 text-sm"><?= $errors['full_name'] ?></p><?php endif; ?>
    </div>

    <div>
      <label class="block mb-1">Email</label>
      <input name="email" class="w-full border p-2 rounded">
      <?php if (!empty($errors['email'])): ?><p class="text-red-600 text-sm"><?= $errors['email'] ?></p><?php endif; ?>
    </div>

    <div>
      <label class="block mb-1">Username</label>
      <input name="username" class="w-full border p-2 rounded">
      <?php if (!empty($errors['username'])): ?><p class="text-red-600 text-sm"><?= $errors['username'] ?></p><?php endif; ?>
    </div>

    <div>
      <label class="block mb-1">Password</label>
      <input type="password" name="password" class="w-full border p-2 rounded">
      <?php if (!empty($errors['password'])): ?><p class="text-red-600 text-sm"><?= $errors['password'] ?></p><?php endif; ?>
    </div>

    <button class="bg-black text-white px-4 py-2 rounded">Create Staff</button>
  </form>
</main>

<?php require base_path('views/partials/footer.php'); ?>
