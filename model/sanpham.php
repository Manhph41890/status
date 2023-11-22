<?php    
function insert_sanpham($tensp,$giasp,$hinh,$soluong,$ngaynhap,$mota,$iddm){
    $sql="insert into hang_hoa(name_sp,price,img,soluong,ngaynhap,mota,iddm) value('$tensp','$giasp','$hinh','$soluong','$ngaynhap','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql="delete from hang_hoa where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home() {
    $sql = "select * from hang_hoa where 1 order by id desc limit 0, 9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10() {
    $sql = "select * from hang_hoa where 1 order by view desc limit 0, 10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// function loadall_sanpham($kyw = "", $iddm = 0) {
//     $sql = "SELECT * FROM hang_hoa WHERE 1";
//     $params = array();
//     if ($kyw !== "") {
//         $sql .= " AND name_sp LIKE ?";
//         $params[] = "%" . $kyw . "%";
//     }
//     if ($iddm > 0) {
//         $sql .= " AND iddm = ?";
//         $params[] = $iddm;
//     }
//     $sql .= " ORDER BY id DESC";
//     $listsanpham = pdo_query($sql, ...$params);
//     return $listsanpham;
// }
function loadall_sanpham($kyw = "", $iddm = 0) {
    $sql = "select * from hang_hoa WHERE 1";
    $params = array();
    if ($kyw !== "") {
        $sql .= " AND name_sp LIKE ?";
        $params[] = "%" . $kyw . "%";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = ?";
        $params[] = $iddm;
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql, ...$params);
    return $listsanpham;
}
function load_anh_sanpham($ma_hh) {
    $sql = "select * from anh_sp WHERE ma_hh = ?";
    $params = array($ma_hh);
    $list_anh = pdo_query($sql, $params);
    return $list_anh;
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danh_muc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    } else{
        return "";
    } 
}
function loadone_sanpham($id){
    $sql="select * from hang_hoa where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "select * from hang_hoa where iddm=".$iddm." AND id <> " . $id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$soluong,$ngaynhap,$mota,$hinh){
    if($hinh!="")
        $sql = "update hang_hoa set iddm='".$iddm."', name_sp='".$tensp."',price='".$giasp."',soluong='".$soluong."',ngaynhap='".$ngaynhap."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else
        $sql = "update hang_hoa set iddm='".$iddm."', name_sp='".$tensp."',price='".$giasp."',soluong='".$soluong."',ngaynhap='".$ngaynhap."',mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}

?>