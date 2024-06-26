<?php include_once "./templates/header.php" ?>

<main>
    <div id="title-container">
        <h1>DevBlog</h1>
        <p>O seu blog de progamação</p>
    </div>

    <div id="posts-container">
        <?php foreach ($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2>
                    <a href="<?= $BASE_URL ?>post.php/?id=<?= $post['id'] ?>">
                        <?= $post['title'] ?>
                    </a>
                </h2>
                <p class="post-description">
                    <?= $post['description'] ?>
                </p>
                <div class="tags-container">
                    <?php foreach ($post['tags'] as $tag): ?>
                        <a href="#" class="tag">
                            <?= $tag ?>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include_once "./templates/footer.php" ?>