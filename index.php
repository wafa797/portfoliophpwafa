
<?php
session_start();

require_once __DIR__ . '/includes/header.php';
?>

<main class="portfolio-container">

    <?php require __DIR__ . '/includes/profile.php'; ?>

    <?php require __DIR__ . '/includes/navbar.php'; ?>

    <?php require __DIR__ . '/includes/about.php'; ?>

    <?php require __DIR__ . '/includes/Education.php'; ?>

    <?php require __DIR__ . '/includes/Experience.php'; ?>

    <?php require __DIR__ . '/includes/projects.php'; ?>

    <?php require __DIR__ . '/includes/Certifications.php'; ?>

    <?php require __DIR__ . '/includes/Skills.php'; ?>

    <?php require __DIR__ . '/includes/Hobbies.php'; ?>

    <?php require __DIR__ . '/includes/languages.php'; ?>

    <?php require __DIR__ . '/includes/contact.php'; ?>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
