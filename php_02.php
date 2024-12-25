<?php
//แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่
?>
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        $my_var = 2;
        ?>
        <h1 class='text-center my-4'>ตัวเลข 1 - 100 เป็นเลขคู่ หรือ เลขคี่</h1>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                $value = "เลขคู่";
            }else {
                $value = "เลขคี่";
            }
        ?>
            <div class="row">
                <div class="col h2 text-end">
                    <?php echo $i." ="; ?>
                </div>
                <div class="col h2 text-start">
                    <?php echo $value ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
