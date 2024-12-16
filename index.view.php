<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-blue-900 p-6">
    <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap bg-blue-900">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">My Blog</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-blue-200 border-blue-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white mr-4">
                    MainPage
                    </a>
                </div>
                <div>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Log in</a>
                </div>
            </div>
        </nav>
    </div>
</header>
<main class="p-6 container mx-auto">
    <a href="/create.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-4">Add Post</a>
    <table class="w-full table-auto">
        <thead>
            <tr>
            <th class="px-4 py-2">№</th>
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($posts as $post ): ?>
            <tr>
                <td class="border px-4 py-2"><?= $post ['id'] ?></td>
                <td class="border px-4 py-2">
                    <a href="/show.php?id=<?= $post ['id'] ?>" class="text-blue-800 underline"><?= $post ['title'] ?></a>
                </td>
                <td class="border px-4 py-2">
                    <a href="/edit.php?id=<?= $post ['id'] ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <a href="/delete.php?id=<?= $post ['id'] ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
           <?php endforeach ?>
        </tbody>
    </table>
</main>
</body>
</html>