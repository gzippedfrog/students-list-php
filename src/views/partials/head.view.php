<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=(!empty($title) ? "$title | " : '') . 'Students list' ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="min-h-screen flex flex-col dark:bg-gray-900 dark:text-white">

    <!-- NAVBAR -->
    <nav class="bg-white border-gray-200 p-6 dark:bg-gray-900 w-full max-w-4xl mx-auto ">
        <div class="flex items-center justify-between">
            <a href="/" class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Students list</a>
            <a href="/register"
                class="text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-white">Register</a>
        </div>
    </nav>

    <!-- MAIN SECTION -->
    <main class="flex-1 w-full p-2 max-w-4xl mx-auto px-6">