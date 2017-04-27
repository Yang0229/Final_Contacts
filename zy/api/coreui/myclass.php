<?php
class dbclass
{
//连接数据库
function db_conn()
{
   $hostipaddress="localhost";
   $mysql_username="root";
   $mysql_password="";
   $mysql_dbdatabase="abcd0001";
   if(!$this->db_conn)
   {
    $mysqllink=mysql_connect($hostipaddress,$mysql_username,$mysql_password); 
    if(!$mysqllink) echo "数据库连接失败!"; 
    mysql_select_db($mysql_dbdatabase,$mysqllink); //选择 数据库
   // mysql_query("set names gb2312"); 
	return $mysqllink;
   }

}

//查询数据库
function db_query($sqlstr)
{  
   return mysql_query($sqlstr);  
}

//关闭数据库
function db_close()
{
   if(!$this->db_close)
   {
    mysql_close();
   }
}
}
?>
 



