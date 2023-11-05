<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="icon" href="assets/Images/logo.png">
    <link rel="stylesheet" href="assets/CSS/collect.css">
    <title> Verzameling </title>
</head>

<body>
        <div class="navbar">
            <div class="logo"><a href="index.html"><img draggable="false" src="./assets/Images/logo.png" alt="logo" class="logo" width="45%"></a></div>
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                </ul>
            </div>
        </div>

        
    <?php
    include('./assets/src/db.php');
    $stmt = $db->prepare("SELECT * FROM collectie");
    $stmt->execute();

    echo '<div class="collection-box">';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="collection-item">';
        echo '<div class="collection-left">';
        echo '<h3 id="naam_product">' . $row['naam'] . '</h3>';
        echo '<p id="kleur">' . $row['kleur'] . '</p>';
        echo '<h3 id="uitgaveJaar">' . $row['jaar'] . '</h3>';
        echo '<p id="informatie">' . $row['info'] . '</p>';
        echo '</div>';
        echo '<div class="collection-right">';
        echo '<img src="' . $row['image'] . '" alt="">';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    ?>


</body>

</html>