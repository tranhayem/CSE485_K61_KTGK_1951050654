<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Danh Sách Môn Học</h1>
    </div>
    <div class="main">
        <div class="container">
            <a href="addCustomer.php"> <button class="btn btn-success"><i class="fas fa-user-plus">Thêm dữ
                        liệu</button></a>
            <?php
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if (isset($_SESSION['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Số tín chỉ</th>
                        <th scope="col">Số tiết lý thuyết</th>
                        <th scope="col">Số tiết bài tập</th>
                        <th scope="col">Số tiết thực hành- thí nghiệm</th>
                        <th scope="col">Số giờ tự học</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $conn = mysqli_connect('localhost', 'root', '', 'monhoc');
                    if (!$conn) {
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    $sql = "SELECT * FROM giangvien";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0)
                    {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $row['mamh']; ?> </th>
                                <td><?php echo $row['ten_mh']; ?></td>
                                <td><?php echo $row['sotinchi']; ?></td>
                                <td><?php echo $row['sotiet_lt']; ?></td>
                                <td><?php echo $row['sotiet_bt']; ?></td>
                                <td><?php echo $row['sotiet_thtn']; ?></td>
                                <td><?php echo $row['sogio_tuhoc']; ?></td>
                                <td><a href="update.php?id=<?php echo $row['magv']; ?>"><button class="btn btn-secondary">Sửa</button></a></td>
                                <td><a href="deleteCustomer.php?id=<?php echo $row['magv']; ?>"><button class="btn btn-danger">Xóa
                                            </button></a>
                                </td>
                            </tr>
                    <?php
                    }
                }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>