   <header>
        <h1>Danh sách tài khoản</h1>
    </header>

    <section>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>User Name</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>Hùng Minh</td>
                    <td>12345</td>
                    <td>fpldev8@gmail.com</td>
                    <td>Phường Trịnh Văn Bô</td>
                    <td>0862428356</td>
                    <td>0</td>
                    <td class="actions">
                        <button onclick="sua()">Sửa</button>
                        <button onclick="xoa()">Xóa</button>
                    </td>
                </tr>
                <!-- Thêm các dòng danh sách khác tại đây -->
            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
    </section>
</body>
</html>
