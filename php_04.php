<?php
//แสดงข้อมูลตัวเลข จาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <form method="post" action="http://localhost/88823665-camp-66/php_04.php">
            <div class="mb-3">
                <label for="start" class="form-label">เลขแรก</label>
                <input name="start" type="number" class="form-control" id="start" placeholder="เช่น 1" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">เลขสุดท้าย</label>
                <input name="end" type="number" class="form-control" id="end" placeholder="เช่น 2" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">submit</button>
            </div>
        </form>
        <?php
        if (isset($_REQUEST['start']) || isset($_REQUEST['end'])){
        ?>
            <h1 class='text-center my-4'>ข้อมูลตัวเลข จาก <?php echo $_REQUEST['start']?> ถึง <?php echo $_REQUEST['end']?> เป็นเลขคู่ หรือ เลขคี่</h1>
            <?php
        for ($i = $_REQUEST['start']; $i <= $_REQUEST['end']; $i++) {
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
    }
        ?>
    </div>
</body>

</html>