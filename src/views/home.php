<?php

// use Model\Pages;

require_once "./bootstrap.php";

$page = $entityManager->getRepository("models\Page")->findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="./src/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="welcome-top">
            <h2>CMS_SQL PROJECT</h2>
            <h3>Content management system</h3>
        </div>
        <header>
            <nav>
                <ul>
                    <?php

                    foreach ($page as $link) {
                        $IdRef = null;
                        if ($link->getId() === 1) {
                            $IdRef = './';
                        } else {
                            $IdRef = '?pageId=' . $link->getId();
                        }
                        print('<li><a href="' . $IdRef . '">' . $link->getPageName() . '</a></li>');
                    }
                    ?>
                </ul>
            </nav>
        </header>

        <?php

        if ($_SERVER['REQUEST_URI'] === ($rootDir . '/')) {
            $content = $entityManager->find("models\Page", 1);
            print($content->getPageContent());
        } else if (isset($_GET['pageId'])) {
            $content = $entityManager->find("models\Page", $_GET['pageId']);
            print('<h4>' . $content->getPageName() . '</h4><br>');
            print($content->getPageContent());
        }
        ?>
    </div>
</body>

</html>