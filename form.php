<?php include 'lib/validation.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
</head>
<style>
    .error {
        color: red;
    }
label,
input {
    display: block;
    margin: 10px 0;
}
</style>

<?php
  $error = [];
  if (isset($_POST['btn_submit'])) {
    // check full name
    if(is_empty('fullname')) {
        $fullname = $_POST['fullname'];
        if(!is_fullname('fullname')) {
            $error['fullname'] = 'Nhập tên không đúng định dạng';
        }
    } else {
        $error['fullname'] = 'Bạn cần nhập họ tên đầy đủ';
    }
    
    // check user name
    if(is_empty('username')) {
        $username = $_POST['username'];
        if(!is_username('username')) {
            $error['username'] = 'Tên đăng nhập không đúng định dạng';
        }
    } else {
        $error['username'] = 'Bạn cần nhập tên đăng nhập đầy đủ';
    }

    if(is_empty('password')) {
        $password = $_POST['password'];
        if(!is_password('password')) {
            $error['password'] = 'Mật khẩu không đúng định dạng';
        }
    } else {
        $error['password'] = 'Bạn cần nhập mật khẩu đầy đủ';
    }

    if(is_empty('phone')) {
        $phone = $_POST['phone'];
        if(!is_phone('phone')) {
            $error['phone'] = 'Số điện thoại không đúng định dạng';
        }
    } else {
        $error['phone'] = 'Bạn cần nhập số điện thoại đầy đủ';
    }
}
?>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>FORM ĐĂNG KÝ</legend>
            <label>Họ và tên:
                <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
                <?php echo form_error('fullname') ?>
            </label>
            <label>Tên đăng nhập:
                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
                <?php echo form_error('username') ?>
            </label>
            <label>Mật khẩu:
                <input type="text" name="password" id="password" value="<?php echo set_value('password') ?>">
                <?php echo form_error('password') ?>
            </label>
            <label>Số điện thoại:
                <input type="number" name="phone" id="phone" value="<?php echo set_value('phone') ?>">
                <?php echo form_error('phone') ?>
            </label>
            <input type="submit" name="btn_submit" value="Đăng ký">
        </fieldset>
    </form>
</body>

</html>