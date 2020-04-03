<?php

$conn_string = "host=ec2-52-87-58-157.compute-1.amazonaws.com port=5432 dbname=da9hr2fdp5g2g user=oakhbxpjguduru password=135b3fe09bba32c33cc018d84aa79eb058af682f363a4c8d0c6b865d8c1038ee";
$dbconn = pg_connect($conn_string);
if (isset($POST['username'])) {
    $username = $POST['username'];
}
if (isset($POST['pass'])) {
    $pass = $POST['pass'];
}
$result = pg_query($dbconn, "select * from tbl_user where username = '" . $username . "' and password = '" . $pass . "'");
if (!$result) {
    echo "Login failed";
} else {
    echo "Login successfully";
}
?>
phải php moi duoc, chu html herl