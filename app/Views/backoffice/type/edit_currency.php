<!DOCTYPE html>
<html>

<head>
    <title>แก้ไขข้อมูลประเภทงบประมษณ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center">แก้ไขข้อมูลประเภทงบประมาณ</h3>
        <form method="post" id="add_create" name="add_create" action="<?= base_url('CurrencyTypes_update') ?>">
            <div class="form-group">
                <input type="hidden" name="currency_id" class="form-control" value="<?= $currency['currency_id'] ?>">
                <label>ชื่อ</label>
                <input type="text" name="currency_name" class="form-control" value="<?= $currency['currency_name'] ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">ยืนยัน</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                    name: {
                        required: true,
                        // ต้องมีความยาวอย่างน้อย 5 ตัว
                        minlength: 5,
                    },

                },
                messages: {
                    name: {
                        required: "ยังไม่กรอกข้อมูล",
                        minlength: "กรอกข้อมูลต้องมีความยาวอย่างน้อย 5 ตัวอักษร",
                    },

                },
            })
        }
    </script>
</body>

</html>