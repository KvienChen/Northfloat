<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>北漂易租管理平台</title>
<link href="/thinkphp/Public/css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/thinkphp/Public/js/jquery.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/jquery-ui.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/plugins/elfinder.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/custom.js"></script>

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body class="nobg loginPage">

<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo"><img src="/thinkphp/Public/images/loginLogo.png" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="/thinkphp/Public/images/icons/dark/files.png" alt="" class="titleIcon" /><h6>登陆平台</h6></div>
        <form action="" id="validate" class="form">
            <fieldset>
                <div class="formRow">
                    <label for="login">用户名称:</label>
                    <div class="loginInput"><input type="text" name="login" class="validate[required]" id="login" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">密码:</label>
                    <div class="loginInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <div class="rememberMe"><input type="checkbox" id="remMe" name="remMe" /><label for="remMe">记住我</label></div>
                    <input type="submit" value="登陆" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</body>
</html>