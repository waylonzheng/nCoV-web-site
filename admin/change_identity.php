<?php
require_once("conn.php");
// 判断表单是否合法
$id = $_GET['id'];
if(isset($_POST['token'])&&$_POST['token']=='add')
{
    //获取数据

    $identity =$_POST['identity'];
    $sql_select = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn,$sql_select);
				//判断用户名是否已存在
				$num = mysqli_num_rows($result); 
				if($num){
					//用户名已存在
					$sql_update = "UPDATE user SET identity='$identity' WHERE id='$id'";
					if(mysqli_query($conn,$sql_update))
					    {
					        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."修改记录成功，确认返回！"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#user"."\""."</script>";
					        die();
					    }else
					    {
					        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."修改记录失败，确认返回！"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../admin.php#user"."\""."</script>";
					        die();
					    }
				}else
    				{
    					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."没有该用户，确认返回！"."\"".")".";"."</script>";
    				}
}
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改用户权限</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/iconfont.css">
</head>
<body>
<!--顶部标签-->
    <div id="header">
        <div class="header">
            <div class="header_left">
                <a href="../index.php"><span>战疫</span>百事通后台管理系统</a>
            </div>
            
        </div>
    </div>
    <!--顶部标签结束-->
    <div class="add_linedata">
        <h2>修改用户权限</h2>
        <a href="../admin.php">返回</a>
        <form method="post" action="">
        <table>
        <tr>
            <td class="td_header">用户名</td>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <td class="td_header">权限</td>
            <td>
            	<select name="identity" class="identity_select">
					<option value="普通用户">普通用户</option>
					<option value="超级管理员">超级管理员</option>
				</select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="提交">
                <input type="hidden" name="token" value="add">
                <input type="reset" value="重置">
            </td>
        </tr>
        </table>
        </form>
    </div>
</body>
</html>
