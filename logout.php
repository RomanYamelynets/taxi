<?



setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true); // httponly !!!


header("Location: /"); exit;

?>
<form method="POST">
    ���� <input name="login" type="text" required><br>
    ������ <input name="password" type="password" required><br>
    �� ���������� �� IP <input type="checkbox" name="not_attach_ip"><br>
    <input name="submit" type="submit" value="�����">
</form>