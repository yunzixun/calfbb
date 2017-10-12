<?php

/* columnar/index.html */
class __TwigTemplate_80a5835f278f829d14d9fb555472d051edc9fc289f65875a76db5c7ffcaefbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "niubaobao/headerLayui.html");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "niubaobao/nav.html");
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "common/header.html");
        echo "

<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">
<link rel=\"stylesheet\"
      href=\"../addons/db/resource/codepress/androidstudio.css\">
<script src=\"../addons/db/resource/codepress/highlight.js\"></script>

";
        // line 10
        echo twig_include($this->env, $context, "common/nav.html");
        echo "

<calf_addons>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id=\"main\" style=\"width: 600px;height:400px;\"></div>

</calf_addons>


<script type=\"text/javascript\" name=\"script_addons\" >
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: 'ECharts 入门示例'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: [\"衬衫\",\"羊毛衫\",\"雪纺衫\",\"裤子\",\"高跟鞋\",\"袜子\"]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

<div class=\"big-right\" style=\"display:block;\">
    <div class=\"scroll-wrap\">

        <div class=\"setting\" >
            <div class=\"mt\">
                <h3 class=\"tt\">
                    柱状图
                </h3>
            </div>

        </div>

    </div>
    <div  lay-filter=\"db\" class=\"layui-tab layui-tab-card\" style=\"width: 280px;margin: 0 auto;margin-top:10px;\">
        <ul class=\"layui-tab-title\">
            <!--<li class=\"layui-this\">静态数据</li>-->
            <li  lay-filter=\"sql\">sql语句</li>
            <li>api接口</li>


        </ul>

    </div>

</div>

<!--模板-->
<style>
    .addTemplet{background-color: #fff;}
    .btn{margin: 10px;}
    body .demo-class .layui-layer-title{background:#2F4056; color:#fff; border: none;}
    body .demo-class .layui-layer-btn{border-top:1px solid #E9E7E7}
    body .demo-class .layui-layer-btn a{background:#333;}
    body .json{min-height:100px;}
</style>




<!--sql模板-->
<!--<div  id=\"sql_templet\" style=\"display: none;\" class=\"layui-row layui-col-space10 addTemplet\">-->
        <!--<div class=\"layui-form-item layui-form-text\">-->
         <!--<pre><code class=\"sql\" style=\"min-height:50px;\"><br />select count(1) from user;</code> </pre>-->
        <!--&lt;!&ndash;sql代码高亮提示&ndash;&gt;-->
    <!--<textarea class=\"sql_code\" style=\"width:100%;min-height:100px;background-color:#333;color:#fff;\">-->
    <!--输入:select count(1) from user;-->
    <!--</textarea>-->

        <!--</div>-->
        <!--&lt;!&ndash;button&ndash;&gt;-->
        <!--<div style=\"text-align: center;padding-bottom: 20px;\">-->
            <!--<button id=\"sql_click\" onclick=\"sql_click();\" class=\"layui-btn layui-btn-radius  \">执行sql</button>-->
            <!--<button  class=\"layui-btn layui-btn-primary layui-btn-radius  layui-layer-close\">取消执行</button>-->
        <!--</div>-->
        <!--&lt;!&ndash;响应结果&ndash;&gt;-->
        <!--<fieldset class=\"layui-elem-field\">-->
            <!--<legend>响应结果</legend>-->
            <!--<div class=\"layui-field-box\">-->
                   <!--<pre><code class=\"json\">-->
                    <!--[-->
                      <!--{-->
                        <!--\"title\": \"apples\",-->
                        <!--\"count\": [12000, 20000],-->
                        <!--\"description\": {\"text\": \"...\", \"sensitive\": false}-->
                      <!--},-->
                      <!--{-->
                        <!--\"title\": \"oranges\",-->
                        <!--\"count\": [17500, null],-->
                        <!--\"description\": {\"text\": \"...\", \"sensitive\": false}-->
                      <!--}-->
                    <!--]-->

                    <!--</code></pre>-->
            <!--</div>-->
        <!--</fieldset>-->


<!--</div>-->
<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>


<script>
    layui.use('element', function(){
        var element = layui.element;

        //监听Tab切换，以改变地址hash值
        element.on('tab(db)', function(data){
            if(data.index==0){
                showSql();
            }

        });
    });
    layui.use('layer', function(){
        var layer = layui.layer;
       
    });

    function showSql(){
     //  var html=\$('#sql_templet').html();
    var html='<div id=\"sql_templet\"style=\"display: block;\"class=\"layui-row layui-col-space10 addTemplet\"><div class=\"layui-form-item layui-form-text\"><pre><code class=\"sql\"style=\"min-height:50px;\"><br/>select * from goods;</code></pre><!--sql代码高亮提示--><textarea class=\"sql_code\"style=\"width:100%;min-height:100px;background-color:#333;color:#fff;\">输入:select * from goods;</textarea></div><!--button--><div style=\"text-align: center;padding-bottom: 20px;\"><button id=\"sql_click\"onclick=\"sql_click();\"class=\"layui-btn layui-btn-radius  \">执行sql</button><button class=\"layui-btn layui-btn-primary layui-btn-radius  layui-layer-close\">取消执行</button></div><!--响应结果--><fieldset class=\"layui-elem-field\"><legend>响应结果</legend><div class=\"layui-field-box\"><pre><code class=\"json\">[{\"title\":\"apples\",\"count\":[12000,20000],\"description\":{\"text\":\"...\",\"sensitive\":false}},{\"title\":\"oranges\",\"count\":[17500,null],\"description\":{\"text\":\"...\",\"sensitive\":false}}]</code></pre></div></fieldset></div>';
        layer.open({
            type: 1,
            title: '输入sql语句:',
            skin: 'demo-class', //样式类名
            closeBtn: 2, //不显示关闭按钮
            anim: 2,
            area: ['500px','500px'],
            shadeClose: true, //开启遮罩关闭
            content: html
        });
        \$(\".layui-layer-shade\").css('background-color','');
        var div=\"\";

        \$('.sql_code').keyup(function(e){

            div=\$(this).val();

            \$('.sql').html(div);
            \$('.sql').each(function(i, block) {
                hljs.highlightBlock(block);
            });

        });

        hljs.initHighlighting();
    }


    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });

    /**
     * 执行sql语句
     */
    function sql_click(){
       var  sql=\$('.sql').text();
        \$.ajax({
            //脚本地址
            url:\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=db&c=index&a=getQuery\",
            type:'post',
            data:{sql:sql,project_id:\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "project", array(), "array"), "project_id", array(), "array"), "html", null, true);
        echo "\"},
            dataType:'json',
            success:function(data){
                if(data){
                    console.log(data);
                    \$('.json').html(JSON.stringify(data));
                    var name=[];
                    var num=[];

                    console.log(data.length);
                    for(var i=0;i<data.length;i++){
                        name.push(data[i].name);
                        num.push(data[i].num);
                    }

                    // 指定图表的配置项和数据
                    var option = {
                        title: {
                            text: 'ECharts 入门示例'
                        },
                        tooltip: {},
                        legend: {
                            data:['销量']
                        },
                        xAxis: {
                            data: name
                        },
                        yAxis: {},
                        series: [{
                            name: '销量',
                            type: 'bar',
                            data: num
                        }]
                    };

                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(option);
                }

            }
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "columnar/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 192,  220 => 190,  37 => 10,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('niubaobao/headerLayui.html') }}
{{ include(\"niubaobao/nav.html\")}}
{{ include(\"common/header.html\")}}

<link rel=\"stylesheet\" href=\"../addons/db/resource/css/db.css\">
<link rel=\"stylesheet\"
      href=\"../addons/db/resource/codepress/androidstudio.css\">
<script src=\"../addons/db/resource/codepress/highlight.js\"></script>

{{ include(\"common/nav.html\")}}

<calf_addons>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id=\"main\" style=\"width: 600px;height:400px;\"></div>

</calf_addons>


<script type=\"text/javascript\" name=\"script_addons\" >
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: 'ECharts 入门示例'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: [\"衬衫\",\"羊毛衫\",\"雪纺衫\",\"裤子\",\"高跟鞋\",\"袜子\"]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>

<div class=\"big-right\" style=\"display:block;\">
    <div class=\"scroll-wrap\">

        <div class=\"setting\" >
            <div class=\"mt\">
                <h3 class=\"tt\">
                    柱状图
                </h3>
            </div>

        </div>

    </div>
    <div  lay-filter=\"db\" class=\"layui-tab layui-tab-card\" style=\"width: 280px;margin: 0 auto;margin-top:10px;\">
        <ul class=\"layui-tab-title\">
            <!--<li class=\"layui-this\">静态数据</li>-->
            <li  lay-filter=\"sql\">sql语句</li>
            <li>api接口</li>


        </ul>

    </div>

</div>

<!--模板-->
<style>
    .addTemplet{background-color: #fff;}
    .btn{margin: 10px;}
    body .demo-class .layui-layer-title{background:#2F4056; color:#fff; border: none;}
    body .demo-class .layui-layer-btn{border-top:1px solid #E9E7E7}
    body .demo-class .layui-layer-btn a{background:#333;}
    body .json{min-height:100px;}
</style>




<!--sql模板-->
<!--<div  id=\"sql_templet\" style=\"display: none;\" class=\"layui-row layui-col-space10 addTemplet\">-->
        <!--<div class=\"layui-form-item layui-form-text\">-->
         <!--<pre><code class=\"sql\" style=\"min-height:50px;\"><br />select count(1) from user;</code> </pre>-->
        <!--&lt;!&ndash;sql代码高亮提示&ndash;&gt;-->
    <!--<textarea class=\"sql_code\" style=\"width:100%;min-height:100px;background-color:#333;color:#fff;\">-->
    <!--输入:select count(1) from user;-->
    <!--</textarea>-->

        <!--</div>-->
        <!--&lt;!&ndash;button&ndash;&gt;-->
        <!--<div style=\"text-align: center;padding-bottom: 20px;\">-->
            <!--<button id=\"sql_click\" onclick=\"sql_click();\" class=\"layui-btn layui-btn-radius  \">执行sql</button>-->
            <!--<button  class=\"layui-btn layui-btn-primary layui-btn-radius  layui-layer-close\">取消执行</button>-->
        <!--</div>-->
        <!--&lt;!&ndash;响应结果&ndash;&gt;-->
        <!--<fieldset class=\"layui-elem-field\">-->
            <!--<legend>响应结果</legend>-->
            <!--<div class=\"layui-field-box\">-->
                   <!--<pre><code class=\"json\">-->
                    <!--[-->
                      <!--{-->
                        <!--\"title\": \"apples\",-->
                        <!--\"count\": [12000, 20000],-->
                        <!--\"description\": {\"text\": \"...\", \"sensitive\": false}-->
                      <!--},-->
                      <!--{-->
                        <!--\"title\": \"oranges\",-->
                        <!--\"count\": [17500, null],-->
                        <!--\"description\": {\"text\": \"...\", \"sensitive\": false}-->
                      <!--}-->
                    <!--]-->

                    <!--</code></pre>-->
            <!--</div>-->
        <!--</fieldset>-->


<!--</div>-->
<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>


<script>
    layui.use('element', function(){
        var element = layui.element;

        //监听Tab切换，以改变地址hash值
        element.on('tab(db)', function(data){
            if(data.index==0){
                showSql();
            }

        });
    });
    layui.use('layer', function(){
        var layer = layui.layer;
       
    });

    function showSql(){
     //  var html=\$('#sql_templet').html();
    var html='<div id=\"sql_templet\"style=\"display: block;\"class=\"layui-row layui-col-space10 addTemplet\"><div class=\"layui-form-item layui-form-text\"><pre><code class=\"sql\"style=\"min-height:50px;\"><br/>select * from goods;</code></pre><!--sql代码高亮提示--><textarea class=\"sql_code\"style=\"width:100%;min-height:100px;background-color:#333;color:#fff;\">输入:select * from goods;</textarea></div><!--button--><div style=\"text-align: center;padding-bottom: 20px;\"><button id=\"sql_click\"onclick=\"sql_click();\"class=\"layui-btn layui-btn-radius  \">执行sql</button><button class=\"layui-btn layui-btn-primary layui-btn-radius  layui-layer-close\">取消执行</button></div><!--响应结果--><fieldset class=\"layui-elem-field\"><legend>响应结果</legend><div class=\"layui-field-box\"><pre><code class=\"json\">[{\"title\":\"apples\",\"count\":[12000,20000],\"description\":{\"text\":\"...\",\"sensitive\":false}},{\"title\":\"oranges\",\"count\":[17500,null],\"description\":{\"text\":\"...\",\"sensitive\":false}}]</code></pre></div></fieldset></div>';
        layer.open({
            type: 1,
            title: '输入sql语句:',
            skin: 'demo-class', //样式类名
            closeBtn: 2, //不显示关闭按钮
            anim: 2,
            area: ['500px','500px'],
            shadeClose: true, //开启遮罩关闭
            content: html
        });
        \$(\".layui-layer-shade\").css('background-color','');
        var div=\"\";

        \$('.sql_code').keyup(function(e){

            div=\$(this).val();

            \$('.sql').html(div);
            \$('.sql').each(function(i, block) {
                hljs.highlightBlock(block);
            });

        });

        hljs.initHighlighting();
    }


    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });

    /**
     * 执行sql语句
     */
    function sql_click(){
       var  sql=\$('.sql').text();
        \$.ajax({
            //脚本地址
            url:\"{{ _G['APP_URL'] }}?m=db&c=index&a=getQuery\",
            type:'post',
            data:{sql:sql,project_id:\"{{ _G['project']['project_id'] }}\"},
            dataType:'json',
            success:function(data){
                if(data){
                    console.log(data);
                    \$('.json').html(JSON.stringify(data));
                    var name=[];
                    var num=[];

                    console.log(data.length);
                    for(var i=0;i<data.length;i++){
                        name.push(data[i].name);
                        num.push(data[i].num);
                    }

                    // 指定图表的配置项和数据
                    var option = {
                        title: {
                            text: 'ECharts 入门示例'
                        },
                        tooltip: {},
                        legend: {
                            data:['销量']
                        },
                        xAxis: {
                            data: name
                        },
                        yAxis: {},
                        series: [{
                            name: '销量',
                            type: 'bar',
                            data: num
                        }]
                    };

                    // 使用刚指定的配置项和数据显示图表。
                    myChart.setOption(option);
                }

            }
        })
    }
</script>
", "columnar/index.html", "C:\\wamp\\www\\lnmpbao\\addons\\db\\template\\columnar\\index.html");
    }
}