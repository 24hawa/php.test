<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death</title>
    <style>
    body{
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
    }
    </style>
</head>
<body>
    <h1>Recommended Drama</h1>

    <?php
        $drama = [
        ['title' => "Hidden Love",
         'main' => "Zhe Yuan",
         'releaseYear' => 2023,
         'playUrl' => "https://examples.com"],

        ['title' => "Love Between Fairy and Devil",
         'main' => "Esther",
         'releaseYear' => 2023,
         'playUrl' => "https://examples.com"],

        ['title' => "Love Like Galaxy",
         'main' => "Lusi",
         'releaseYear' => 2022,
         'playUrl' => "https://examples.com"],
        
         ['title' => "My Super Boyfriend",
         'main' => "Esther",
         'releaseYear' => 2021,
         'playUrl' => "https://examples.com"],

        ['title' => "Sword and Fairy",
         'main' => "Esther",
         'releaseYear' => 2024,
         'playUrl' => "https://examples.com"]
        ];
    
    function filterByMain($drama, $main){
        $filteredDrama = [];

        foreach ($drama as $drama){
            if($drama['main'] === $main){
             $filteredDrama[] = $drama;
        }
         }
        return $filteredDrama;
    }
     ?>
    
    <ul>
            <?php foreach (filterByMain($drama, 'Zhe Yuan') as $drama) : ?>
            <li>
                <a href="<?= $drama['playUrl']?>">
                    <?= $drama['title']; ?> (<?= $drama['releaseYear']; ?>) - By <?=$drama['main']; ?>
                </a>
            </li>
         <?php endforeach; ?>

    </ul>


    

</body>
</html>