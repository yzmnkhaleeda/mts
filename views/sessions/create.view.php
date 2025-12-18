<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>

<main class="mx-auto max-w-md p-6">
  <h1 class="text-2xl font-bold mb-4">Login</h1>

  <form method="POST" action="/sessions" class="space-y-4">
    <div>
      <label class="block mb-1">Email or Username</label>
      <input name="login" class="w-full border p-2 rounded" value="<?= htmlspecialchars($_POST['login'] ?? '') ?>">
      <?php if (!empty($errors['login'])): ?>
        <p class="text-red-600 text-sm mt-1"><?= htmlspecialchars($errors['login']) ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label class="block mb-1">Password</label>
      <input type="password" name="password" class="w-full border p-2 rounded">
      <?php if (!empty($errors['password'])): ?>
        <p class="text-red-600 text-sm mt-1"><?= htmlspecialchars($errors['password']) ?></p>
      <?php endif; ?>
    </div>

    <button class="w-full bg-black text-white p-2 rounded">Login</button>
  </form>
</main>

<?php require base_path('views/partials/footer.php'); ?>
