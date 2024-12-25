<?php
//แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <form method="post" action="http://localhost/88823665-camp-66/php_03.php">
            <div class="mb-3">
                <label for="multiplicand" class="form-label">แม่สูตรคูณ</label>
                <input name="multiplicand" type="number" class="form-control" id="multiplicand" placeholder="เช่น 2" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">submit</button>
            </div>
        </form>
        <?php
        if (isset($_REQUEST['multiplicand'])) {
        ?>
            <h1 class='text-center my-4'>สูตรคูณแม่ <?php echo $_REQUEST['multiplicand']; ?></h1>
            <?php
            for ($i = 1; $i <= 12; $i++) {
            ?>
                <div class="row">
                    <div class="col h2 text-end">
                        <?php echo $_REQUEST['multiplicand'] ." x $i ="; ?>
                    </div>
                    <div class="col h2 text-start">
                        <?php echo $_REQUEST['multiplicand'] * $i; ?>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>