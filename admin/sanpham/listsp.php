
    <header>
        <h1>Danh sách danh mục</h1>
    </header>

    <section>
        <form action="index.php?act=listsanpham" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem</th> 
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Majestic 012</td>
                    <td>Tủ âm tường trưng bày rượi gỗ cao cấp</td>
                    <td>Nội thất phòng khách</td>
                    <td>4500000</td>
                    <td>5000</td>   

                    <td class="actions">
                        <a href=""><button">Sửa</button></a><br><br>
                        <a href=""><button">Xóa</button></a>
                    </td>
                </tr>

            </tbody>
        </table></form>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=addsp"><button>Thêm sản phẩm</button></a>
        </div>
    </section>

