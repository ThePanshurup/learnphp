<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php if(isset($GET['name']) && isset($GET['age'])): ?>
    <h1>Hello, <?= $GET['name'] ?? '' ?>! You are <?= $GET['age'] ?? '' ?> years old.</h1>
  <?php endif; ?>
  <form action="/answer" method="POST">
    <label for="name">Name:</label>
    <input id="name" placeholder="Your name" />
    <label for="age">Age:</label>
    <input type="number" id="age" placeholder="Your age" />
    <input type="submit" value="Submit" />
    <button>Send</button>
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>