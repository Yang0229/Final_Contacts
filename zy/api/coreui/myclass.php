<?php
class dbclass
{
//�������ݿ�
function db_conn()
{
   $hostipaddress="localhost";
   $mysql_username="root";
   $mysql_password="";
   $mysql_dbdatabase="abcd0001";
   if(!$this->db_conn)
   {
    $mysqllink=mysql_connect($hostipaddress,$mysql_username,$mysql_password); 
    if(!$mysqllink) echo "���ݿ�����ʧ��!"; 
    mysql_select_db($mysql_dbdatabase,$mysqllink); //ѡ�� ���ݿ�
   // mysql_query("set names gb2312"); 
	return $mysqllink;
   }

}

//��ѯ���ݿ�
function db_query($sqlstr)
{  
   return mysql_query($sqlstr);  
}

//�ر����ݿ�
function db_close()
{
   if(!$this->db_close)
   {
    mysql_close();
   }
}
}
?>
 



