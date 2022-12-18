<?php include 'partials/head.view.php' ?>

<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    First name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last name
                </th>
                <th scope="col" class="py-3 px-6">
                    Group number
                </th>
                <th scope="col" class="py-3 px-6">
                    Points
                </th>
                <th scope="col" class="py-3 px-6">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= htmlspecialchars($student['first_name']) ?>
                </th>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student['last_name']) ?>
                </td>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student['group_number']) ?>
                </td>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student['points']) ?>
                </td>
                <td class="py-4 px-6">
                    <a href=<?='students/edit?id=' . htmlspecialchars($student['id']) ?> class="font-medium
                        text-blue-600
                        dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.view.php' ?>