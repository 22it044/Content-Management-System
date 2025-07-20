<?php
include"partials/header.php";
include base_path("partials/navbar.php");
include base_path("partials/hero.php");

$db = new Database();
$db->getConnection();

$article = new Article();
$articles = $article->get_all();

?>



<!-- Main Content -->
    <main class="container my-5">
        <?php if(!empty($articles)): ?>
            <?php foreach($articles as $article): ?>

        <!-- Blog Post 1 -->
        <div class="row mb-4">
            <div class="col-md-4">
                <?php if(!empty($article->image)): ?>
                    <imgs
                        src="<?php echo htmlspecialchars($article->image) ?>"
                        class="img-fluid"
                        alt="Blog Post Image"
                    >
                <?php else: ?>
                    <img
                        src="https://via.placeholder.com/350x200"
                        class="img-fluid"
                        alt="Blog Post Image"
                    >
                <?php endif; ?>

            </div>
            <div class="col-md-8">
                <h2><?php echo htmlspecialchars($article->title); ?></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
                    pulvinar facilisis justo mollis, auctor consequat urna.
                </p>
                <a href="article.php" class="btn btn-primary">Read More</a>
            </div>
        </div>
       
        <?php endforeach; ?>
        <?php endif; ?>
    </main>
    
<?php
include"partials/footer.php";
?>