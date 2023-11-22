<?php 
function loadall_taikhoan(){
    $sql="select * from khach_hang order by ma_kh  desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email, $user, $pass) {
    $sql = "insert into khach_hang(email, user, pass) values ('$email', '$user', '$pass')";
    pdo_execute($sql);
}

function checkuser($user, $pass){
    $sql = "select * from khach_hang where user='$user' AND pass='$pass'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql = "select * from khach_hang where email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel){
    $sql = "update khach_hang set user='$user', pass='$pass', email='$email', address='$address', tel='$tel' where id=$id";
    pdo_execute($sql);
}

function loadone_taikhoan($id) {
    $sql = "SELECT * FROM khach_hang WHERE id = $id";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function delete_taikhoan($id) {
    $sql = "DELETE FROM khach_hang WHERE id = $id";
    pdo_execute($sql);
}
?>
