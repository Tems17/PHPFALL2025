<?php
require_once "config.php";
require_once "DogApi.php";
require_once "DogApp.php";

$api = new DogApi(DOG_BASE_URL, DOG_API_KEY);
$app = new DogApp($api);
?>

<!doctype html>
<html lang="en">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content ="noindex, nofollow">
    <meta name="description" content= "Dog API">
    <meta charset="utf-8">
    <title>Dog API</title>

    <!--add our css file -->
    <link rel="stylesheet" href="./css/style.css">
</head>   
<body>

<!--the header -->
    <header>
        <h1>Dog Collection</h1>
</header>

<main>
        <?php 
        $app->showRandomDogs(5);
?>
</main>

<!--the aside section -->
<aside>
    <h2>Fun fact about Dogs</h2>
    <p>A dog's nose is always wet because they help in absorbing certain scents. Furthermore, a dog will lick the nose to taste the scent</p>
</aside>


<!--the footer -->
<footer>
    <p>Credits to Dog API </p>
</footer>
</body>

 </html>
