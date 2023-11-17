
    <header>
        <h1>Danh sách đơn hàng</h1>
    </header>

    <section>
    <form action="index.php?act=listsanpham" method="post">
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm...">
        </div>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Chọn</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Khách Hàng</th>
                    <th>Số Lượng Khách Hàng</th>
                    <th>Thanh Toán</th>
                    <th>Tình Trạng Đơn Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>DAM-2</td>
                    <td>HongHieu</td>
                    <td>
                        <p>Dev1@gmail.com</p>
                        <p>Đông Ninh Đông Sơn</p>
                        <p>0862428356</p>
                    </td>
                    <td>1</td>
                    <td>40000 VND</td>
                    <td>Đang giao hàng</td>
                    <td>04:47:09pm 16/10/2023</td>
                    <td class="actions">
                        <button onclick="sua()">Sửa</button>
                        <button onclick="xoa()">Xóa</button>
                    </td>
                </tr>
                <!-- Thêm các dòng danh sách khác tại đây -->
            </tbody>
        </table>
    </form>
    </section>

    <script>
        function sua() {
            // Xử lý logic sửa
            alert('Chức năng sửa đang được phát triển.');
        }

        function xoa() {
            // Xử lý logic xóa
            alert('Chức năng xóa đang được phát triển.');
        }
    </script>
</body>
</html>
