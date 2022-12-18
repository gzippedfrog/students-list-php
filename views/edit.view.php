<?php require 'views/partials/head.view.php' ?>

<form method="POST" class="grid gap-6 max-w-md mx-auto">
    <input type="hidden" name="id" value=<?= $student['id'] ?>>
    <div>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            First name
        </label>
        <input type="text" id="first_name" name="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="John" value=<?= htmlspecialchars($student['first_name']) ?? '' ?> >
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <?= $errors['first_name'] ?>
        </p>
    </div>
    <div>
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Last name
        </label>
        <input type="text" id="last_name" name="last_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Doe" value=<?= htmlspecialchars($student['last_name']) ?> >
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <?= $errors['last_name'] ?>
        </p>
    </div>

    <div>
        <label for="group_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Group number
        </label>
        <input type="text" id="group_number" name="group_number"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="42A" value=<?= htmlspecialchars($student['group_number'] ?? '') ?> >
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <?= $errors['group_number'] ?>
        </p>
    </div>

    <div>
        <label for="points" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Points
        </label>
        <input type="number" id="points" name="points"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="300" value=<?= htmlspecialchars($student['points'] ?? '') ?> >
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <?= $errors['points'] ?>
        </p>
    </div>

    <button type="submit"
        class="max-w-min text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

</form>

<?php require 'views/partials/footer.view.php'; ?>