<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members - YIWA</title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('./templates/navbar.php'); ?>

    <main class="page-content">
        <section class="join-header">
            <div class="container">
                <h2>Members</h2>
                <p>Wikis that are part of the YouTube Independent Wiki Alliance.</p>
            </div>
        </section>

        <section id="members" class="members">
            <div class="container">
                <div class="wiki-grid">

                <?php
                $jsonFile = './data/members.json';

                $jsonData = file_get_contents($jsonFile);

                $members = json_decode($jsonData, true);

                if ($members === null) {
                    echo "<p>Error loading members.json</p>";
                    return;
                }

                foreach ($members as $key => $wiki) {
                    $name = htmlspecialchars($wiki['name']);
                    $url = htmlspecialchars($wiki['url']);
                    $icon = htmlspecialchars($wiki['icon']);
                    $about = htmlspecialchars($wiki['about']);

                    $socials = $wiki['socials'];
                    ?>
                    <div class="wiki-card">
                        <div class="wiki-Header">
                            <div class="wiki-icon">
                                <img src="<?php echo$icon ?>" alt="<?php echo $name; ?> Logo">
                            </div>
                            <div class="wiki-Name">
                                <h4><?php echo $name; ?></h4>
                                <div>
                                    <?php
                                    foreach($socials as $social) {
                                        ?>
                                            <a href="<?php echo$social['url'] ?>"><img src="<?php echo$social['icon'] ?>" width="25px"></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <p><?php echo $about; ?></p>
                        <a href="<?php echo $url; ?>" target="_blank" class="wiki-link">Visit Wiki →</a>
                    </div>
                <?php
                }
                ?>

            </div>
        </section>
    </main>

    <?php include('./templates/footer.php'); ?>

</body>
</html>
