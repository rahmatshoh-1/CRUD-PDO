<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create php</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="flex min-h-screen justify-center items-center">
    <div class="container mx-auto flex min-h-screen justify-center items-center">
        <div class="w-full max-w-md">
            <form action="/crud/store.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Add post
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>