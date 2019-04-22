<?php
// mode_1.php(程序处理类)
 Class ss{
   function ssuo(){
    echo <<< html
    <head>
    <title>搜索</title>
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .div1{text-align:center;width:100%;}
        .div11{margin:0 auto;width:600px;border:1px dashed #00F;height:100px;}
        .div2{width:980px;background:red;} 
        </style>
</head>
<body text-align:center>
        <br />
        <br />
        <br />
    <div class="search">
        <div class="div1">
        <form class="form-inline" action="search.php" method="post">
            <input type="text" style="height: 40px; width: 360px;" class="form-control" ng-model="query" name="search" placeholder="输入关键字"/>
            <input class="btn btn-small btn-success" role="button" type="submit" value="搜索"  id="btn"/>
        </form>
    </div>
    </div>
html;
   }


   function div_m($title,$url,$t_date){
       echo <<< html
       <div class="div11">
html;
        echo "<a href =\"";
        echo $url;
        echo "\">";
        echo $title;
        echo "</a>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo $t_date;
        echo "</div>";
   }
 }
?>
