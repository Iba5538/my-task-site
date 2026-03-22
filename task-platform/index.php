<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home - Trading App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> [cite: 104]
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"> [cite: 106]
    <link href="assets/app.css" rel="stylesheet"> [cite: 107]
</head>
<body>
    <div class="page-wrap container py-4">
        <div class="d-flex justify-content-between align-items-start">
            <div>
                [cite_start]<div class="text-muted">Welcome back</div> [cite: 113]
                [cite_start]<h2 class="fw-bold mb-0">Frieda</h2> [cite: 114]
            </div>
            <span class="pill" style="border-color:#f59e0b;color:#b45309;">
                [cite_start]<i class="bi bi-dot"></i> OFFLINE [cite: 117]
            </span>
        </div>

        [cite_start]<div class="hero-gradient p-4 mt-4"> [cite: 151]
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-4 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(255,255,255,.18);">
                    [cite_start]<i class="bi bi-lightning-charge-fill"></i> [cite: 154]
                </div>
                <div>
                    [cite_start]<div class="h5 fw-bold mb-0">Live Trading</div> [cite: 157]
                    [cite_start]<small style="opacity:.9;">24/7 Real-time market data</small> [cite: 158]
                </div>
            </div>
            <p class="mt-3 mb-4" style="opacity:.95;">
                Real-time updates. [cite_start]Start with just <b>$100</b>. [cite: 162]
            </p>
        </div>
    </div>

    <?php include 'includes/nav.php'; ?>
    [cite_start]<script src="assets/app.js"></script> [cite: 194]
</body>
</html>