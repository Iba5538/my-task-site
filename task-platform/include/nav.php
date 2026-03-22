<?php $active = basename($_SERVER['PHP_SELF']); ?>
<nav class="bottom-nav">
    <div class="container d-flex justify-content-between text-center">
        <a href="index.php" class="<?= ($active == 'index.php') ? 'active' : '' ?>">
            <div><i class="bi bi-house"></i></div>Home
        [cite_start]</a> [cite: 188]
        <a href="trade.php" class="<?= ($active == 'trade.php') ? 'active' : '' ?>">
            <div><i class="bi bi-bar-chart"></i></div>Trade
        [cite_start]</a> [cite: 188]
        <a href="assets.php" class="<?= ($active == 'assets.php') ? 'active' : '' ?>">
            <div><i class="bi bi-wallet2"></i></div>Assets
        [cite_start]</a> [cite: 189, 191]
        <a href="account.php" class="<?= ($active == 'account.php') ? 'active' : '' ?>">
            <div><i class="bi bi-person"></i></div>Account
        [cite_start]</a> [cite: 190, 191]
    </div>
</nav>