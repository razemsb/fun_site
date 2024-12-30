<?php
require_once('database/db.php');
$guides_per_page = 5;
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$current_page = ($current_page > 0) ? $current_page : 1;
$offset = ($current_page - 1) * $guides_per_page;
$query = "SELECT * FROM guides ORDER BY views DESC LIMIT $guides_per_page OFFSET $offset";
$result = $conn->query($query);
$total_query = "SELECT COUNT(*) AS total FROM guides";
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_guides = $total_row['total'];
$total_pages = ceil($total_guides / $guides_per_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>NieR Automata Guides</title>
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
    <h2>Все гайды</h2>
    <div class="list-group">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($guide = $result->fetch_assoc()): ?>
                <a href="guide.php?id=<?php echo $guide['id']; ?>" class="list-group-item list-group-item-action">
                    <h5><?php echo htmlspecialchars($guide['title']); ?></h5>
                    <p><?php echo nl2br(htmlspecialchars(substr($guide['content'], 0, 150))) . '...'; ?></p>
                    <small>Просмотров: <?php echo $guide['views']; ?></small>
                </a>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Нет доступных гайдов.</p>
        <?php endif; ?>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-5">
            <?php if ($current_page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="guides_list.php?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                    <a class="page-link" href="guides_list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages): ?>
                <li class="page-item">
                    <a class="page-link" href="guides_list.php?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<footer class="py-4">
    <div class="container text-center">
        <p>&copy; 2024 NieR Fandom. Все права защищены.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>