<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YIWA - YouTube Independent Wiki Alliance</title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('./templates/navbar.php'); ?>

    <main>
        <section class="hero">
            <div class="container">
                <h2>YouTube Independent Wiki Alliance</h2>
                <p>An alliance of independently operated, community-run wikis dedicated to documenting YouTube and it's content creators..</p>
                <div class="hero-btns">
                    <a href="/members" class="btn btn-primary">Our Members</a>
                    <a href="/join" class="btn btn-secondary">Join</a>
                </div>
            </div>
        </section>

        <section id="members" class="members">
            <div class="container">
                <h3>Our Mission</h3>
                <p>
                    Founded January 4th, 2026 with the DanTDM Wiki, JackSucksAtLife Wiki and CaseOh Wiki.  Our goal is to bring together the YouTube wiki community assist
                    with wiki editing, and general upkeep/maintenance tasks of running a wiki.
                </p>
                <p style="margin-top:20px;">
                    All of the wikis in <abbr title="YouTube Independent Wiki Alliance">YIWA</abbr> are separately owned, operated and hosted. Each maintains
                    their own unique designs, values, traditions and hosting provider.
                </p>

                <h3>At a Glance</h3>

                <div class="stats-grid">
                    <div class="info-box accent-box">
                        <?php
                            $jsonFile = './data/members.json';

                            $jsonData = file_get_contents($jsonFile);

                            $members = json_decode($jsonData, true);

                        ?>
                        <h3><?php echo count($members); ?> Wikis</h3>
                    </div>
                    <div class="info-box accent-box">
                        <h3>2,450+ Articles</h3>
                    </div>
                    <div class="info-box accent-box">
                        <h3>81,300+ Edits</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('./templates/footer.php'); ?>

</body>
</html>