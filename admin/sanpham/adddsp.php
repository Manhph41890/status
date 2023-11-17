
    <header>
        <h1>Thêm sản phẩm mới</h1>
    </header>

    <section>
        <form action="index.php?act=addsanpham" method="post">
        <label for="se">Chọn danh mục</label>
        <select name="chondm" id="chondm">
            <option value="">Nội thất phòng khách</option>
            <option value="">Nội thất phòng làm việc</option>
            <option value="">Nội thất nhà bếp</option>
        </select>
        <br><br>
        <label for="ten-loai">Tên sản phẩm:</label>
        <input type="text" id="ten-loai" name="ten-loai">

        <label for="gia">Giá sản phẩm:</label>
        <input type="number" id="price " name="price">

        <label for="hinh">Hình sản phẩm:</label>
        <input type="file" id="img" name="img">

        <label for="gia">Số lượng sản phẩm:</label>
        <input type="number" id="soluong" name="soluong">

        <label for="mota">Mô tả sản phẩm:</label><br>
        <textarea name="mota" cols="100" rows="10"></textarea>

        <div class="actions"><br>
            <button onclick="themMoi()" type="submit">Thêm mới</button>
            <button type="reset">Nhập lại</button>
            <a href="index.php?act=listdm">Danh sách</a>
        </div>
        </form>
    </section>

