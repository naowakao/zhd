<!--{php}-->
require_once('../../wp-load.php');
global $g_page_title;
$g_page_title = "キャンペーンフォーム [完了画面]";
get_header();
<!--{/php}-->

<div id="container">
  <div id="content">
    <h1 class="sp"><img src="../resource/ct_200801/img/mainImg_conf_i01_sp.jpg" alt="WChance Fair 理想の“ライフスタイル”を実現できる住まいを"></h1>
    <div class="contents" style="margin-top:0px;">
    
      <!--ArticleBox-->
      <article id="formBox">
        <section>
          <h1 class="pc"><img src="../resource/ct_200801/img/mainImg_conf_i01_pc.jpg" alt="WChance Fair 理想の“ライフスタイル”を実現できる住まいを"></h1>
          <h2>ご応募ありがとうございました。</h2>
          <p>当選結果は当選された方へのメールにてご連絡させていただきます。ご了承ください。<br><br><br></p>          
          <ul id="btnBox">
            <li class="comp"><input name="" type="button" onClick="location.href='https://toyotahome-kyushu.co.jp/'" value="サイトトップへ"></li>
          </ul>
        </section>
      </article>
      <!--//ArticleBox end-->
      
    </div><!--.contents-->
  </div><!--#content-->
</div><!--#container-->



<!--resource-->
<!--css読み込み-->
<script type="text/javascript">
var link = document.createElement('link');
link.href = 'resource/css/form.css';
link.rel = 'stylesheet';
link.type = 'text/css';
var head = document.getElementsByTagName('head')[0];
head.appendChild(link);
</script>
<!--//css読み込み end-->
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if(restore)selObj.selectedIndex=0;
}
</script>
<script type="text/javascript">
$(function(){
$("#b02").on("click",function(){
var link = $("#Form").attr("action");
$("#Form").attr("action",link+"#complete");
});
});
</script>
<!--script type="text/javascript">
$("#hover-click-nav02").hover(function(){
$("#hover-click-nav02 .menubg").slideDown("250");
},function(){
$("#hover-click-nav02 .menubg").hide();
});
</script>
<script type="text/javascript">
var menuHeight = $("#menu-wrap_sp").height();
var startPos = 0;
$(window).scroll(function(){
var currentPos = $(this).scrollTop();
if(currentPos > startPos){
if ($(window).scrollTop() >= 200){
$("#menu-wrap_sp").stop().animate({top: "-100px"}, 10);
flag = "down";
}
}else{
if(flag === "down"){
$("#menu-wrap_sp").stop().animate({top: 0}, 200)
flag = "up";
}
}
startPos = currentPos;
});
</script>
<script type="text/javascript">
$(function(){
var showFlug = false;
var topBtn = $('#page-top');
topBtn.css('bottom', '-100px');
var showFlug = false;
$(window).scroll(function(){
if ($(this).scrollTop() > 100){
if (showFlug == false){
showFlug = true;
topBtn.stop().animate({'bottom': '40px'}, 200);
}
}else{
if(showFlug){
showFlug = false;
topBtn.stop().animate({'bottom': '-100px'}, 200);
}
}
});
//スクロールしてトップ
topBtn.click(function(){
$('body,html').animate({scrollTop: 0}, 500);
return false;
});
});
</script-->
<!--//resource end-->


<!--{php}-->
require_once('../../wp-load.php');
get_footer();
<!--{/php}-->
