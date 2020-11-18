<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <?php
            $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
            $response = file_get_contents($url);
            $result = json_decode($response);

            echo "<div class='container'>";
            echo "<div class='row'>";
            
            foreach($result->tracks->items as $info){
                $img = $info->album->images[0]->url;
                $name = $info->name;
                $art = $info->album->artists[0]->name;
                $date = $info->album->release_date;
                $avai = count($info->album->available_markets);
                echo "<div class='col-md-4'>";
                echo "<div class='card'>";
                echo "<img class='card-img' src='$img' alt=''>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>";
                echo "<b>$name</b><br>";
                echo "Artist: $art<br>";
                echo "Release date: $date <br>";
                echo "Avaliable: $avai countries";
                echo "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            
            echo "</div>";
            echo "</div>";
        ?>
    </div>
</body>
</html>