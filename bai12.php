<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tạo bảng trong PHP để hiển thị chuỗi và giá trị</h1>
    <?php
        $array = [
          ['name' => 'name 1', 'phoneNumber' => '000000000'],
          ['name' => 'name 2', 'phoneNumber' => '000000000'],
          ['name' => 'name 3', 'phoneNumber' => '000000000'],
          ['name' => 'name 4', 'phoneNumber' => '000000000'],
          ['name' => 'name 5', 'phoneNumber' => '000000000'],
          ['name' => 'name 6', 'phoneNumber' => '000000000'],
          ['name' => 'name 7', 'phoneNumber' => '000000000'],
          ['name' => 'name 8', 'phoneNumber' => '000000000'],
        ];
        echo '<table>
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Phone number</td>
                </tr>
            </thead>
            <tbody>';
            foreach($array as $index => $item) {
                echo
                '<tr> 
                    <td>' . $index .'</td>
                    <td>' . $item['name'] .'</td>
                    <td>' . $item['phoneNumber'] .'</td>
                 </tr>';
            }
            echo '</tbody>
        </table>'
    ?>
</body>
</html>