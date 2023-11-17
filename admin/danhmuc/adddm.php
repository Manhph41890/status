  <header>
        <h1>Thêm danh mục mới</h1>
    </header>

    <section>
        <form action="index.php?act=adddanhmuc" method="post">
        <label for="ma-loai">Mã loại:</label>
        <input type="text" id="ma-loai" name="ma-loai">

        <label for="ten-loai">Tên loại:</label>
        <input type="text" id="ten-loai" name="ten-loai">

        <div class="actions">
            <button onclick="themMoi()" type="submit">Thêm mới</button>
            <button type="reset">Nhập lại</button>
            <a href="index.php?act=listdm">Danh sách</a>
        </div>
        </form>
    </section>
