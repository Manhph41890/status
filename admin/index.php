<?php 
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
        case 'adddm':
            include "./danhmuc/adddm.php";
            break;
        case 'listdm':
            include "./danhmuc/listdm.php";
            break;
        case 'addsp':
            include "./sanpham/adddsp.php";
            break;
        case 'listsp': 
            include "./sanpham/listsp.php";
            break;
        case 'listtk': 
            include "./taikhoan/listtk.php";
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