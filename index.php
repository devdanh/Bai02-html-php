<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai02-html-php</title>
</head>

<body>
    <!-- Header -->
    <?php include_once './inc/header.php'; ?>
    <h1>HTML VÀ PHP</h1>
    <?php echo 'Hello World'; ?>
    <?php $language = 'Ngon ngu lap trinh php';
    var_dump($language);
    ?>
    <?php include './inc/content.php'; ?>
    <?php include './inc/content.php'; ?>
    <!-- Footer -->
    <?php include_once './inc/footer.php'; ?>
</body>

</html>