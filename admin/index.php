<?php 
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/hinhanh.php";
    include "../model/taikhoan.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
        case 'adddm':
            // kiểm tra người dùng có click vào nút add hay không 
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai']; 
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            include "danhmuc/adddm.php";
            break;
        case 'listdm':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listdanhmuc = loadall_danhmuc($kyw);
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $dm = loadone_danhmuc($_GET['id']); 
                }
                include "danhmuc/update.php";
                break;                      
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'addsp':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm=$_POST['iddm']; 
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $soluong=$_POST['soluong'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (isset($_FILES['hinh']) && $_FILES['hinh']['name'] !== "") {
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                }else{
                    $hinh=" ";
                }
            }
                insert_sanpham($tensp, $giasp, $hinh, $soluong, $ngaynhap, $mota, $iddm);
                $thongbao="Thêm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
                //lấy danh sách các danh mục sản phẩm từ model
                include "sanpham/adddsp.php";
                break;
        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/updatesp.php";
            break;        
        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm']; 
                $tensp=$_POST['tensp']; 
                $giasp=$_POST['giasp'];
                $soluong=$_POST['soluong'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota']; 
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    //echo "The file". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has bee upload.";
                } else {
                    //echo "Sory";
                }
                update_sanpham($id,$iddm,$tensp,$giasp,$soluong,$ngaynhap,$mota,$hinh);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham();
            include "sanpham/listsp.php";
            break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/listsp.php";
                break;

                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/listsp.php";
                    break;
            case 'listanh':
                $ten_sanpham=loadall_sanpham();
                $listanh = loadall_anhsp();
                include "hinhanh/listanh.php";
                break;
            case 'addanh':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    if(isset($_POST['ma_hh']) && isset($_FILES['ten_anh'])) {
                        $ma_hh = $_POST['ma_hh']; 
                        $ten_anh = $_FILES['ten_anh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["ten_anh"]["name"]);
                        
                        if (isset($_FILES['ten_anh']) && $_FILES['ten_anh']['name'] !== "") {
                            if(move_uploaded_file($_FILES["ten_anh"]["tmp_name"], $target_file)){
                                insert_anh($ma_hh, $ten_anh);
                                $thongbao = "Thêm thành công";
                            } else {
                                $thongbao = "Không thể tải lên ảnh";
                            }
                        } else {
                            $thongbao = "Vui lòng chọn ảnh";
                        }
                    }
                }
                $listsanpham = loadall_sanpham();
                include "hinhanh/addanh.php";
                break;
            case 'xoaanh':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_anh($_GET['id']);
                }
                $listanh = loadall_anhsp();
                include "hinhanh/listanh.php";
                break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;
        case 'listbl': 
            include "./binhluan/listbl.php";
            break;
        case 'listdh': 
            include "./donhang/listdh.php";
            break;
        case 'thongke': 
            include "./thongke/thongke.php";
            break;
        case 'bieudo': 
            include "./thongke/bieudo.php";
            break;
        case 'addvc': 
            include "./voucher/addvc.php";
            break;
        case 'listvc': 
            include "./voucher/listvc.php";
            break;
        

        default:
            include "home.php";
            break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>