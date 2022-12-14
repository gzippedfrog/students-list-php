<?php view('partials/head') ?>

<!-- SEARCH -->
<form method="GET" action="/">
    <label for="query" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" id="query" name="query"
            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Search by name, group number, points..." value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
        <button type="submit"
            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>

<!-- TABLE -->
<div class="overflow-x-auto relative rounded-md mt-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    <a href="<?= getUrlWithSortBy('first_name', $_GET) ?>"
                        class="flex items-center <?= $_GET['sortBy'] === 'first_name' ? 'text-blue-600' : '' ?>">
                        First name
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 320 512">
                            <path
                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                        </svg>
                    </a>
                </th>
                <th scope="col" class="py-3 px-6">
                    <a href="<?= getUrlWithSortBy('last_name', $_GET) ?>"
                        class="flex items-center <?= $_GET['sortBy'] === 'last_name' ? 'text-blue-600' : '' ?>">
                        Last name
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 320 512">
                            <path
                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                        </svg>
                    </a>
                </th>
                <th scope="col" class="py-3 px-6">
                    <a href="<?= getUrlWithSortBy('group_number', $_GET) ?>"
                        class="flex items-center <?= $_GET['sortBy'] === 'group_number' ? 'text-blue-600' : '' ?>">
                        Group numbers
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 320 512">
                            <path
                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                        </svg>
                    </a>
                </th>
                <th scope="col" class="py-3 px-6">
                    <a href="<?= getUrlWithSortBy('points', $_GET) ?>"
                        class="flex items-center <?= $_GET['sortBy'] === 'points' ? 'text-blue-600' : '' ?>">
                        Points
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 320 512">
                            <path
                                d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                        </svg>
                    </a>
                </th>
                <th scope="col" class="py-3 px-6">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students)): ?>
            <?php foreach ($students as $student): ?>
            <tr class="bg-gray-100 border-b last-of-type:border-none dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student->first_name) ?>
                </td>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student->last_name) ?>
                </td>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student->group_number) ?>
                </td>
                <td class="py-4 px-6">
                    <?= htmlspecialchars($student->points) ?>
                </td>
                <td class="py-4 px-6">
                    <a href=<?='edit?id=' . htmlspecialchars($student->id) ?> class="font-medium
                        text-blue-600
                        dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <?php endforeach ?>
            <?php else: ?>
            <tr class="bg-gray-100 border-b last-of-type:border-none dark:bg-gray-800 dark:border-gray-700">
                <th colspan="5" scope="row"
                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400 text-center">
                    Nothing found
                </th>
            </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

<div class="mt-3">
    <?= view('partials/paginator', [
                'prevPageLink' => $prevPageLink,
                'nextPageLink' => $nextPageLink,
                'pages' => $pages,
            ]) ?>
</div>

<!-- ALERT -->
<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
<div x-data="{ show: true }"
    class="absolute cursor-pointer top-4 left-1/2 -translate-x-1/2 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 z-50"
    role="alert" x-show="show" @click="show = false" x-init="setTimeout(() => show = false, 2000)">
    Successfully updated
</div>
<?php endif ?>

<?php view('partials/footer') ?>