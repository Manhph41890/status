<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê sản phẩm theo loại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions button {
            padding: 8px;
            cursor: pointer;
        }

        .table-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .table-actions button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Thống kê sản phẩm theo loại</h1>
    </header>

    <section>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Loại Hàng</th>
                    <th>Số Lượng</th>
                    <th>Giá Cao Nhất</th>
                    <th>Giá Nhỏ Nhất</th>
                    <th>Giá Trung Bình</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15</td>
                    <td>Áo hot trend 2023</td>
                    <td>5</td>
                    <td>245000.00 VND</td>
                    <td>40000.00 VND</td>
                    <td>88000.000000 VND</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Áo Vãi Trơn</td>
                    <td>2</td>
                    <td>69000.00 VND</td>
                    <td>50000.00 VND</td>
                    <td>59500.000000 VND</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Áo Vãi Cao Cấp</td>
                    <td>2</td>
                    <td>60000.00 VND</td>
                    <td>50000.00 VND</td>
                    <td>55000.000000 VND</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Hàng Giảm giá</td>
                    <td>1</td>
                    <td>74000.00 VND</td>
                    <td>74000.00 VND</td>
                    <td>74000.000000 VND</td>
                </tr>
                <!-- Thêm các dòng thông tin khác tại đây -->
            </tbody>
        </table>
    </section>
</body>
</html>
