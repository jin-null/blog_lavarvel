<!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    {{--    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />--}}
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="/assets/images/logo.png" style="border:1px solid gray" BORDER="0" ALT=""
                                         align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
            <div class="blog-desc">武汉长乐教育PHP课程-博客系统开发</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="">日志首页</a></li>
                <li><a href="/create">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="announce text" style="border:1px solid silver;padding:5px;font-size:14px;">
                <h4 style="color:#FF3300"><img src="/assets/images/wav.gif" width="18" height="18" border="0" alt=""
                                               align="absmiddle"> 简单的BLOG示例</h4>
                本示例Blog包括日志的新增、修改、列表、统计、评论和删除等功能,可以作为入门PHP的绝佳示例。<P>请按照下面步骤操作，增加分类、添加日志、增加评论。
            </div>
            <!--
            <div class="article-top">
                <div class="view-mode">浏览模式: <a href="?mode=normal">普通</a> | <a href="?mode=list">列表</a></div><div class="pages">{$page}</div>
            </div>
            -->

            <div>

                @foreach ($articles as $article)
                    <div class="textbox-title">
                        <h4>
                            <img src="/assets/images/icon_point2.gif" width="13" height="13" border="0" alt=""
                                 align="absmiddle">
                            <a href="__URL__/show/id/{$vo.id}">{{$article->title}}</a>
                        </h4>
                        <div class="textbox-label">
                            [ 2014-9-12 15:30:20 | <a href="#">{{$article->category->name}} </a>]
                        </div>
                    </div>

                    <div class="textbox-content">
                        {{$article->content}}
                    </div>
                    <div class="textbox-bottom">
                        [ 管理：<a href="/{{$article->id}}/edit">编辑</a> <a href="#">删除</a> ]
                        | <a href="#">评论: 15</a> | 浏览: 20
                    </div>
                @endforeach


            </div>
            <!--
            <div class="article-bottom">
                <div class="pages">{$page}
                </div>
            </div>
            -->
        </div>
    </div>

    <div id="sidebar" class="sidebar">
        <div id="innerSidebar">
            <div id="panelSearch" class="panel">
                <div id="panelStats" class="panel">
                    <h5>统计数据</h5>
                    <div class="panel-content">
                        日志总数：<span style="color:#CC9933">12</span><br/>
                        阅读总数：<span style="color:#6699FF">30</span><br/>
                        评论总数：<span style="color:#FF9900">50</span><br/>
                    </div>
                </div>
                <h5>日志分类 </h5>
                <div class="panel-content">
                    <ul id="category">
                        <li>
                            <div class="fLeft">
                                <input TYPE="text" id="categoryName" class="text" NAME="name">
                            </div>
                            <input TYPE="button" value="增 加" class="submit hMargin small">
                            <br style="clear:both;float:auto"/>
                        </li>
                        <volist name="category" id="vo">
                            <li>
                                <img src="/assets/images/folder.gif" width="18" height="18" border="0" alt=""
                                     align="absmiddle">
                                <a href="#">新闻</a>
                                <span>(33)</span>
                                <img src="/assets/images/del.gif" style="cursor:pointer" width="20" height="20"
                                     border="0" alt="">
                            </li>
                            <li>
                                <img src="/assets/images/folder.gif" width="18" height="18" border="0" alt=""
                                     align="absmiddle">
                                <a href="#">娱乐</a>
                                <span>(33)</span>
                                <img src="/assets/images/del.gif" style="cursor:pointer" width="20" height="20"
                                     border="0" alt="">
                            </li>
                        </volist>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5>最新日志</h5>
                <div class="panel-content">
                    <ul>
                        <li>
                            <img src="/assets/images/icon_ctb.gif" width="11" height="11" border="0" alt=""
                                 align="absmiddle"/>
                            <a href="#" title="学PHP真有趣">学PHP真有趣</a>
                            <sup style="color:silver;font-size:12px">
                                [<span style="color:#3366CC">20<!-- 阅读数 --></span> |<span style="color:#FF6600"> 15
                                    <!-- 评论数 --></span>]
                            </sup>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5>最新评论</h5>
                <div class="panel-content">
                    <ul>
                        <volist id="vo" name="lastComments">
                            <li>
                                <img src="/assets/images/Comment.gif" width="9" height="9" border="0" alt=""
                                     align="absmiddle">
                                <a href="#"> <span style="color:#3366CC">Aaron</span></a>：
                                <a href="#" title="">您的博文写得好好呢！</a>
                        </volist>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer">
    <div id="innerFooter">Powered by 武汉长乐教育 | <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html>