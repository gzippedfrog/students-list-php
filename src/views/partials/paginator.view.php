<div class="flex justify-between select-none">
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Page
        <span class="font-semibold text-gray-900 dark:text-white">
            <?= $_GET['page'] ? $_GET['page'] : 1 ?>
        </span>
        of
        <span class="font-semibold text-gray-900 dark:text-white">
            <?= $pages ?>
        </span>
    </span>

    <div>
        <!-- Previous Button -->
        <?php if ($prevPageLink): ?>

        <a href="<?= $prevPageLink ?>"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Previous
        </a>

        <?php else: ?>

        <div class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300
    rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-600 cursor-not-allowed">
            Previous
        </div>

        <?php endif ?>

        <!-- Next Button -->
        <?php if ($nextPageLink): ?>

        <a href="<?= $nextPageLink ?>"
            class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>

        <?php else: ?>

        <div
            class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-600 cursor-not-allowed">
            Next
        </div>

        <?php endif ?>
    </div>
</div>