<header>
        <h1>Danh sách bình luận</h1>
    </header>
<section>
    <form action="index.php?act=listbinhluan" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội Dung</th>
                    <th>IDUser</th>
                    <th>IDpro</th>
                    <th>Ngày Bình Luận</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>11</td>
                    <td>Xin link mua quần</td>
                    <td>6</td>
                    <td>12</td>
                    <td>02:57 am 19/10/2023</td>
                    <td class="actions">
                        <button onclick="xoa()">Xóa</button>
                    </td>
                </tr>
                <!-- Thêm các dòng danh sách khác tại đây -->
            </tbody>
        </table>
    </form>
    </section>