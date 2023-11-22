<?php 
function loadall_anhsp(){
    $sql="select * from anh_sp order by id desc";
    $listanh=pdo_query($sql);
    return $listanh;
}
function load_ten_sanpham($ma_hh){
    if($ma_hh>0){
        $sql="select * from hang_hoa where id=".$ma_hh;
        $hh=pdo_query_one($sql);
        extract($hh);
        return $name_sp;
    } else{
        return "";
    } 
}
function insert_anh($ma_hh,$ten_anh){
    $sql="insert into anh_sp(ma_hh,ten_anh) value('$ma_hh','$ten_anh')";
    pdo_execute($sql);
}
function delete_anh($id){
    $sql="delete from anh_sp where id=".$id;
    pdo_execute($sql);
}

?>