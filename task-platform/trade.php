<?php 
session_start();
$status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $status = "Order of $$amount placed successfully!";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Trade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/app.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrap container pt-3">
        [cite_start]<div class="card card-soft p-4" style="background: linear-gradient(90deg, #5b21b6,#7c3aed); color:#fff;border-radius: 26px;"> [cite: 279]
            [cite_start]<div class="h4 fw-bold mb-0">Trading</div> [cite: 285]
            [cite_start]<div class="display-6 fw-bold mb-0">$0.00</div> [cite: 294]
        </div>

        <?php if($status): ?>
            <div class="alert alert-success mt-3 rounded-4"><?= $status ?></div>
        <?php endif; ?>

        <form method="POST" class="mt-4">
            [cite_start]<label class="form-label fw-semibold">Investment Amount</label> [cite: 309]
            [cite_start]<input name="amount" class="form-control form-control-lg mb-3" placeholder="Enter amount" required> [cite: 311]
            <div class="row g-3">
                <div class="col-6">
                    [cite_start]<button type="submit" class="btn btn-lg w-100 card-soft" style="background: #8ef0c9; font-weight:800;">BUY</button> [cite: 319, 321]
                </div>
                <div class="col-6">
                    [cite_start]<button type="submit" class="btn btn-lg w-100 card-soft" style="background: #ffb1b1; font-weight:800;">SELL</button> [cite: 325, 327]
                </div>
            </div>
        </form>
    </div>
    <?php include 'includes/nav.php'; ?>
</body>
</html>