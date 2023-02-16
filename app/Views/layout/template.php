<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'CBT Project' ?></title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS Local -->
    <?php if($section == 'auth') : ?>
        <?php if($title == 'login') : ?>
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css'); ?>">
        <?php elseif($title == 'register') : ?>
            <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/register.css'); ?>">
        <?php endif; ?>
    <?php elseif($section == 'home') : ?>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/home.css'); ?>">
    <?php endif; ?>
</head>
<body id="home">
    <!-- Navbar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- JS Local -->
    <?php if($section == 'auth') : ?>
        <?php if($title == 'login') : ?>
            <script type="text/javascript" src="<?= base_url('assets/js/login.js'); ?>"></script>
        <?php elseif($title == 'register') : ?>
            <script type="text/javascript" src="<?= base_url('assets/js/register.js'); ?>"></script>
        <?php endif; ?>
    <?php elseif($section == 'home') : ?>
        <script type="text/javascript" src="<?= base_url('assets/js/home.js'); ?>"></script>
    <?php endif; ?>
</body>
</html>