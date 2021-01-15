<!--{php}-->
require_once('../../wp-load.php');
global $g_page_title;
$g_page_title = "キャンペーンフォーム [確認画面]";
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
          
          <form id="Form" name="form1" method="post" action="">
            <input type="hidden" name="token" value="<!--{$token}-->">
			  
            <h2>ご希望のプランをお選びください。※WChance1、2は同時にお申し込み可能です。</h2>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr class="gry">
                <td class="cf_cp"><!--{$form.PlanGrp.html}--><br><!--{$form.planWC1.html}--></td>
              </tr>
            </table>
            
            <h2>お客様情報をご記入ください<span>※は必須項目</span></h2>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr class="gry">
                <th>お名前<strong>（※）</strong></th>
                <td>
                  <!--{$form.Kanji.html}-->
                  <!--{$form.Kanji.error}-->
                </td>
                </tr>
              <tr>
                <th>ふりがな<strong>（※）</strong></th>
                <td>
                  <!--{$form.Kana.html}-->
                  <!--{$form.Kana.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>郵便番号<strong>（※）</strong></th>
                <td>
                  <!--{$form.Zip.html}-->
                  <!--{$form.Zip.error}-->
                </td>
              </tr>
              <tr>
                <th>都道府県<strong>（※）</strong></th>
                <td>
                  <!--{$form.Pref.html}-->
                  <!--{$form.Pref.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>市区町村<strong>（※）</strong></th>
                <td>
                  <!--{$form.Add1.html}-->
                  <!--{$form.Add1.error}-->
                </td>
              </tr>
              <tr>
                <th>それ以降<strong>（※）</strong></th>
                <td>
                  <!--{$form.Add2.html}-->
                  <!--{$form.Add2.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>お電話<strong>（※）</strong></th>
                <td>
                  <!--{$form.Tel.html}-->
                  <!--{$form.Tel.error}-->
                </td>
              </tr>
              <tr>
                <th>Eメール<strong>（※）</strong></th>
                <td>
                  <!--{$form.Email.html}-->
                  <!--{$form.Email.error}-->
                </td>
              </tr>              
              <tr class="gry">
                <th>ご職業</th>
                <td>
                  <!--{$form.Job.html}-->
                  <!--{$form.Job.error}-->
                </td>
              </tr>
              <tr>
                <th>お勤め先</th>
                <td>
                  <!--{$form.Company.html}-->
                  <!--{$form.Company.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>年齢</th>
                <td>
                  <!--{$form.Age.html}-->
                  <!--{$form.Age.error}-->
                </td>
              </tr>
              <tr>
                <th>土地所有の<br>有無</th>
                <td>
                  <!--{$form.LandGrp.html}-->
                  <!--{$form.LandGrp.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>入居希望月</th>
                <td>
                  <!--{$form.moving.html}-->
                  <!--{$form.moving.error}-->
                </td>
              </tr>
              <tr>
                <th>不動産情報を<br class="sp">希望する</th>
                <td>
                  <!--{$form.Area.html}-->
                  <!--{$form.Area.error}-->
                </td>
              </tr>
              <tr class="gry">
                <th>ご希望の<br>連絡方法</th>
                <td class="time">
                  <!--{$form.contact01.html}-->
                  <!--{$form.contact02.html}-->
                  <!--{$form.contact03.html}-->
                  <!--{$form.ContactOther.html}-->
                </td>
              </tr>
              <tr>
                <th>ご連絡可能な<br>時間帯</th>
                <td class="time">
                  <!--{$form.t01.html}-->
                  <!--{$form.t02.html}-->
                  <!--{$form.t03.html}-->
                  <!--{$form.t04.html}-->
                  <!--{$form.t05.html}-->
                </td>
              </tr>
              <tr class="gry">
                <th>弊社担当者がいる場合</th>
                <td class="time">
                  展示場名：<!--{$form.Tenjijo.html}--><br class="sp"> 担当者名：<!--{$form.Tanto.html}-->
                </td>
              </tr>
            </table>
            
            <h2>ご質問やご相談など、ご自由にお書きください</h2>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr class="gry">
                <td>
                  <!--{$form.Comment.html}-->
                  <!--{$form.Comment.error}-->
                <td>
              </tr>
            </table>
            
            <div id="privacy" style="display:none">
              <span><!--{$form.Privacy.html}--></span>
              <!--{$form.Privacy.error}-->
            </div>
            <ul id="btnBox">
              <li><input name="back" id="b01" type="submit" value="戻る"></li>
              <li><input name="send" id="b02" type="submit" value="送信する"></li>
            </ul>
          </form>
          
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
function MM_jumpMenu(targ, selObj, restore) { //v3.0
eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
if (restore) selObj.selectedIndex = 0;
}
</script>
<script type="text/javascript">
$(function() {
$("#b02").on("click", function() {
var link = $("#Form").attr("action");
// $("#Form").attr("action", link + "?p=complete");
var tenjijo_value = '<!--{$form.Tenjijo.value}-->';
var tanto_value = '<!--{$form.Tanto.value}-->';

if (tenjijo_value != '' || tanto_value!=''){  
  $("#Form").attr("action", link + "?p=complete&tenjijo=true");
}
else{
  $("#Form").attr("action", link + "?p=complete");
}
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
