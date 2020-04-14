<?php
error_reporting(E_ALL || ~E_NOTICE);



echo 'head';

class MysqlDB{
    //主机，端口，用户，密码，字符集，默认数据库
    //对象的初始化属性
    public $host;
    public $port;
    public $user;
    public $pass;
    public $charset;
    public $dbname;

    //运行时生成的属性
    public $link;



     //构造方法
    function __construct($params = array()) {
        $this->host = isset($params['host']) ? $params['host'] : '127.0.0.1';
        $this->port = isset($params['port']) ? $params['port'] : '3306';
        $this->user = isset($params['user']) ? $params['user'] : 'root';
        $this->pass = isset($params['pass']) ? $params['pass'] : 'root1234';
        $this->charset = isset($params['charset']) ? $params['charset'] : 'utf8';
        $this->dbname = isset($params['dbname']) ? $params['dbname'] : '';


        //连接数据库
        $this->connect();
        //设置字符集
        $this->setCharset();
        //选择默认数据库
        $this->selectDB();
    }


        /**
         * 连接数据库
         */
    public function connect(){
    if(!$link=mysql_connect("$this->host:$this->port",$this->user,
            $this->pass)){
            echo '连接失败，请检查mysql服务器，与用户信息';
            die;
       }else{
            //连接成功,记录连接资源
            $this->link = $link;

       }
    }

    /*
     * 设置字符集
     */

    public  function  setCharset(){
        $sql = "set names $this->charset";
        if(!mysql_query($sql,$this->link)){
            echo 'SQL执行失败<br>';
            echo '出错了SQL是:',$sql,'<br>';
            echo '错误代码是:',mysql_errno($this->link),'<br>';
            echo '错误信息是:',mysql_error($this->link),'<br>';
            die;
        }

    }
    /*
     * 设置默认数据库
     */
    public function selectDB(){
        //判断是否存在一个数据库名
        if($this->dbname === '') {
            return ;
        }

        $sql = "use $this->dbname";
        if(!mysql_query($sql,$this->link)){
            echo 'SQL执行失败<br>';
            echo '出错了SQL是:',$sql,'<br>';
            echo '错误代码是:',mysql_errno($this->link),'<br>';
            echo '错误信息是:',mysql_error($this->link),'<br>';
            die;
        }
    }
    public  function  query($sql){
        return mysql_query($sql,$this->link);
    }

}
$options = array(
    'host' => '127.0.0.1',
    'port' => '3306',
    'user' => 'root',
    'pass' => 'root1234',
    'charset' => 'utf8',
    'dbname' => 'shop'
);

//
echo '111';


print("<pre>");/*格式化输出*/
print_r($options);
print("</pre>");


$db = new MysqlDB($options);
echo '类名：'.get_class($db).'<br>';




function getvalue($temp,$name)//获取上个页面传来的值
{
    $temp = isset($_POST["$name"]) ? $_POST["$name"] : "";


     return $temp=str_replace(' ', '',$temp);//去除所有空格

}



$link = $db->link;



if($db->connect_error){
    die("连接失败: " . $db->connect_error);
}



echo 'lianjie~~~~！！！1';


$link = $db->link;


$sql = "select * from product ";
$result=mysql_query($sql,$link);

$row=mysql_fetch_assoc($result);

print("<pre>");/*格式化输出*/
print_r($row);
print("</pre>");





date_default_timezone_set('PRC');
//date_default_timezone_set(Asia/Chongqing ,Asia/Shanghai ,Asia/Urumqi);
$nowdate = (string)date("Ymd");



?>
