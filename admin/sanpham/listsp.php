
    <header>
        <h1>Danh sách danh mục</h1>
    </header>

    <section>

    <form action="index.php?act=listsp" method="post">
        <label for="">Tìm kiếm sản phẩm</label>
                    <input type="text" name="kyw">
                    <input type="submit" name="listok" id="" value="Go"><br><br>
        <label for="">Tìm kiếm sản phẩm theo danh mục</label>
                    <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name_dm'] ?></option>
                <?php endforeach; ?>
                <input type="submit" name="listok" id="" value="Go">
            </select>
                    
                </form>
        

        <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập</th>
                    <th>Lượt xem</th> 
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath
                        ."' height='80'>";
                    }else {
                        $hinh = "no photo";
                    }
                    
                    echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>Majestic 0'.$id.'</td>
                <td>'.$name_sp.'</td>
                <td>'.$hinh.'</td>
                <td><strong>'.$price.'$</strong></td>
                <td>'.$soluong.'</td>
                <td>'.$ngaynhap.'</td>
                <td>'.$view.'</td>
                <td>'.$mota.'</td>
                <td><a href="'.$suasp.'"><input type="button"value="Sửa"></a>
                <a href="'. $xoasp.'"><input type="button" value="Xóa"></a></td>
            </tr>';
                }
            ?>

            </tbody>
        </table>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=addsp"><button>Thêm sản phẩm</button></a>
        </div></form>
    </section>

