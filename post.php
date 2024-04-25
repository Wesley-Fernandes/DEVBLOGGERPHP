<?php include_once "./templates/header.php" ?>

<?php

if (isset($_GET["id"])) {
    $postID = $_GET["id"];
    foreach ($posts as $post) {
        if ($post['id'] == $postID) {
            $currentPost = $post;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost["title"] ?></h1>
        <p id="post-description"><?= $currentPost["description"] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem
            quas, ab sequi laudantium voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi
            laudantium voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.
        </p>

        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem
            quas, ab sequi laudantium voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi
            laudantium voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolor est odio cumque. In assumenda sint quidem quas, ab sequi laudantium
            voluptas officia incidunt illo! Labore voluptas quis odit vitae saepe.
        </p>
    </div>
    <aside class="nav-container">
        <h3 class="nav-aside-title">Tags</h3>
        <ul class="nav-aside-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li>
                    <a href="#" class="aside-link">
                        <?= $tag ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 class="nav-aside-title">Categorias</h3>
        <ul class="nav-aside-list">
            <?php foreach ($categories as $category): ?>
                <li>
                    <a href="#" class="aside-link">
                        <?= $category ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php include_once "./templates/footer.php" ?>