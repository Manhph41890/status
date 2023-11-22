   <header>
        <h1>Danh sách tài khoản</h1>
    </header>

    <section>
    <form action="index.php?act=listtaikhoan" method="post" >
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>User Name</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk = "index.php?act=suatk&ma_kh =" .$ma_kh;
                $xoatk = "index.php?act=xoatk&ma_kh =" .$ma_kh;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                    $img="<img src='".$hinhpath
                    ."' height='50'>";
                }else {
                    $img = "no photo";
                }
                echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $ma_kh . '</td>
                    <td>' . $user . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $img . '</td>
                    <td>' . $dia_chi . '</td>
                    <td>' . $sdt . '</td>
                    <td>' . $role . '</td>
                    <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a>
                    <a href="' . $xoatk . '"><input type="button" value="Xóa"onclick="return confirm("Bạn có chắc muốn xóa tài khoản này không?" ></a></td>
                </tr>';
            }
            ?>
            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
        </from>
    </section>
</body>
</html>
