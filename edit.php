<?php
    //Подключайм файл с функциями
    include 'functions.php';    
    include 'database/start.php';
    $id = $_GET['id']; $post = $db->getOne('posts',$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit php</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="flex min-h-screen justify-center items-center">
    <div class="container mx-auto flex min-h-screen justify-center items-center">
        <div class="w-full max-w-md">
            <form action="/crud/update.php?id=<?= $post['id'] ?>" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label> 

                    <input name="title" value="<?= $post['title'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Edit post
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>