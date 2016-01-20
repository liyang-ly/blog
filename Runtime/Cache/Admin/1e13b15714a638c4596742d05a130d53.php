<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>文章列表</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="<?php echo ($PUBLIC_PATH); ?>/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo ($PUBLIC_PATH); ?>/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo ($PUBLIC_PATH); ?>/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC_PATH); ?>/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC_PATH); ?>/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC_PATH); ?>/css/icons.css" />

    <!-- libraries -->
    <link href="<?php echo ($PUBLIC_PATH); ?>/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo ($PUBLIC_PATH); ?>/css/compiled/tables.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="/index.php/Admin/"><img src="<?php echo ($PUBLIC_PATH); ?>/img/logo.png" /></a>

            <ul class="nav pull-right">   
                <li class="settings hidden-phone">
                    <a href="/index.php/Admin" role="button">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="/index.php/Admin/Exit/" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li >
                <a href="/index.php/Admin">
                    <i class="icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li >
                
                <a class="dropdown-toggle" href="#">
                    <i class="icon-envelope"></i>
                    <span>留言</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu ">
                    <li ><a href="/index.php/Admin/MessageList/">留言列表</a></li>
                    <li><a href="/index.php/Admin/ReplyMessage">回复留言</a></li>
                </ul>
            </li>  
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-th-large"></i>
                    <span>文章</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu active">
                    <li><a href="/index.php/Admin/NewArticle">新建文章</a></li>
                    <li><a href="/index.php/Admin/ArticleList" class="active">文章列表</a></li>
                    <li><a href="/index.php/Admin/ArticleClass">文章分类</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-cog"></i>
                    <span>系统</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/webapp/index.php/Admin/CreateNewProduct">首页</a></li>
                    <li><a href="/webapp/index.php/Admin/ProductList">我的</a></li>
                    <li><a href="/webapp/index.php/Admin/HomeProducts">其它</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-share-alt"></i>
                    <span>退出</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/webapp/index.php/Admin/Exit/">安全退出</a></li>
                    <li><a href="/webapp/index.php/Admin/Exit/index/state/and">重新登录</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        <?php echo ($tip); ?>
        <div class="container-fluid">
            <div id="pad-wrapper">
                
                <!-- products table-->
                <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
                <div class="table-wrapper products-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>文章列表</h4>
                        </div>
                    </div>
                        <ul class="nav nav-tabs">
                            <?php if(is_array($CLASS_DATA)): foreach($CLASS_DATA as $k=>$vaule): if($CLASS_ACT == $k): ?><li class="active">
                                        <a href="/index.php/Admin/ArticleList/doarticlelist/state/showclass/class/<?php echo ($vaule["name"]); ?>/key/<?php echo ($k); ?>"><?php echo ($vaule["name"]); ?></a>
                                     </li>
                                <?php else: ?>
                                    <li ><a href="/index.php/Admin/ArticleList/doarticlelist/state/showclass/class/<?php echo ($vaule["name"]); ?>/key/<?php echo ($k); ?>"><?php echo ($vaule["name"]); ?></a></li><?php endif; endforeach; endif; ?>
                        </ul>
                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        ID
                                    </th>
                                    <th class="span3">
                                        标题
                                    </th>
                                    <th class="span3">
                                        分类
                                    </th>
                                    <th class="span3">
                                        时间
                                    </th>
                                    <th class="span2">
                                     操作
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($ARTICLE_DATA)): foreach($ARTICLE_DATA as $k=>$vaule): ?><tr>
                                    <td>
                                        <?php echo ($vaule["id"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vaule["title"]); ?>
                                    </td>
                                    <td >
                                        <?php echo ($vaule["class"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vaule["time"]); ?>
                                    </td>
                                    <td>
                                    <a href="/index.php/Admin/ArticleList/doarticlelist/state/dele/id/<?php echo ($vaule["id"]); ?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                                
                                
                            </tbody>
                        </table>
                         <div class="row ctrls">
                            <div class="pagination pagination-centered pagination-large">
                                <ul>
                                    <li><a href="#">&#8249;</a></li>
                                    <?php $__FOR_START_234124365__=1;$__FOR_END_234124365__=$sum;for($i=$__FOR_START_234124365__;$i < $__FOR_END_234124365__;$i+=1){ if($act == $i): ?><li><a class="active" href="/index.php/Admin/MessageList/domessagelist/state/show/id/<?php echo ($i); ?>"><?php echo ($i); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="/index.php/Admin/MessageList/domessagelist/state/show/id/<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php endif; } ?>
                                    <li><a href="#">&#8250;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end products table -->
            </div>
        </div>
    </div>
    <!-- end main container -->

	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo ($PUBLIC_PATH); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo ($PUBLIC_PATH); ?>/js/theme.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>