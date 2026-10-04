<?php

$posts = [
  [
    'title' => 'The evolution of AI usage every year',
    'date' => 'April 7, 2026',
    'author' => 'Aleksander Kartuzov',
    'body' => 'Artificial Intelligence (AI) has been evolving rapidly over the years, with new applications and advancements being made every year. From machine learning to natural language processing, AI is transforming industries and changing the way we live and work.',
  ],
  [
    'title' => 'The future of web development: trends to watch in 2026',
    'date' => 'April 12, 2026',
    'author' => 'Mihail Burov',
    'body' => 'Web development is constantly evolving, with new technologies and trends emerging every year. In 2026, we can expect to see continued growth in areas such as artificial intelligence, progressive web apps, and serverless architecture. Developers will need to stay up-to-date with these trends to remain competitive in the industry.',
  ],
];
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>