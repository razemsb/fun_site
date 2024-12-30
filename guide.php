<?php
require_once('database/db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM guides WHERE id = $id";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $guide = $result->fetch_assoc();
        $conn->query("UPDATE guides SET views = views + 1 WHERE id = $id");
        $answers_query = "SELECT * FROM guide_answers WHERE guide_id = $id";
        $answers_result = $conn->query($answers_query);
    } else {
        die("Гайд не найден.");
    }
} else {
    die("Некорректный запрос.");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title><?php echo htmlspecialchars($guide['title']); ?> | NieR Automata Guides</title>
</head>
<body>
<header class="p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="index.php" class=" text-decoration-none">
                <h1 class="m-0">NieR Automata Guides</h1>
            </a>
        </div>
        <nav class="nav">
            <a class="nav-link" href="index.php">Главная</a>
            <a class="nav-link" href="guides_list.php">Гайды</a>
            <a class="nav-link" href="contact.php">Контакты</a>
        </nav>
    </div>
    <hr class="my-2">
</header>
<div class="container my-5">
    <h2 class="fw-bold"><?php echo htmlspecialchars($guide['title']).' ('.htmlspecialchars($guide['id']).')'; ?></h2>
    <p><?php echo nl2br(htmlspecialchars($guide['content'])); ?></p>
    <h4 class="fw-bold">Ответы:</h4>
<?php if ($answers_result->num_rows > 0): ?>
    <?php while ($answer = $answers_result->fetch_assoc()): ?>
        <div class="answer mb-4">
            <?php if (!empty($answer['answer_image'])): ?>
                <img src="<?php echo htmlspecialchars($answer['answer_image']); ?>" alt="Изображение ответа" class="img-fluid mb-3">
            <?php endif; ?>
            <p><?php echo nl2br(htmlspecialchars($answer['answer_text'])); ?></p>

            <?php if (!empty($answer['answer_text_2'])): ?>
                <p><?php echo nl2br(htmlspecialchars($answer['answer_text_2'])); ?></p>
            <?php endif; ?>
            <?php if (!empty($answer['answer_image_2'])): ?>
                <img src="<?php echo htmlspecialchars($answer['answer_image_2']); ?>" alt="Изображение ответа 2" class="img-fluid mb-3">
            <?php endif; ?>

            <?php if (!empty($answer['answer_text_3'])): ?>
                <p><?php echo nl2br(htmlspecialchars($answer['answer_text_3'])); ?></p>
            <?php endif; ?>
            <?php if (!empty($answer['answer_image_3'])): ?>
                <img src="<?php echo htmlspecialchars($answer['answer_image_3']); ?>" alt="Изображение ответа 3" class="img-fluid mb-3">
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>Ответов нет.</p>
<?php endif; ?>

    
</div>
<footer class="py-4">
    <hr>
    <div class="container text-center">
        <p>&copy; 2024 NieR Fandom. Все права защищены.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>