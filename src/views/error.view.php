<?php view('partials/head') ?>

<div class="text-center">
    <p class="text-6xl font-bold">
        Error <?= $error ?>
    </p>

    <p class="mt-3 text-3xl">
        <?= $message ?>. <a href="/" class="text-blue-600">Go back...</a>
    </p>
</div>

<?php view('partials/footer') ?>