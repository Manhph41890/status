
    <header>
        <h1>Danh sách danh mục</h1>
    </header>

    <section>
        <form action="index.php?act=listdanhmuc" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Majestic 012</td>
                    <td>Nội thất phòng khách</td>
                    <td class="actions">
                    <a href=""><button">Sửa</button></a>
                    <a href=""><button">Xóa</button></a>   
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=adddm"><button>Thêm sản phẩm</button></a>
        </div></form>
    </section>