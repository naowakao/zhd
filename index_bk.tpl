<!--{php}-->
require_once('../../wp-load.php');
global $g_page_title;
$g_page_title = "キャンペーンフォーム [登録画面]";
get_header();
<!--{/php}-->

<div id="container">
  <div id="content">
    <h1 class="sp"><img src="../resource/ct_200601/img/mainImg_form_i01_sp.jpg" alt="トヨタホーム九州　Presents 次世代ZEH+モニターフェア　トヨタホームが実現するこれからの暮らし"></h1>
    <p class="sp">
      <img src="../resource/ct_200601/img/mainImg_form_i02_sp.jpg" alt="次世代ZEH+３つのPremium style搭載アイテムの中から１つをお選びいただけます！Premium style1先進設備+太陽光発電システム+蓄電池。Premium style2 先進設備+太陽光発電システム+エネファームtype。 Premium style3 先進設備+太陽光発電システム+V2Hスタンド。">
      <img src="../resource/ct_200601/img/mainImg_form_i03_sp.jpg" alt="トヨタホームがご提案する「次世代ZEH+」とは？自然災害に強い高品質な住まい+トヨタホーム独自の先進設備（HeMSプラス、全館喚起システムピュア24セントラル）+暮らしに合わせたレジリエンス設備">
      <img src="../resource/ct_200601/img/mainImg_form_i04_sp.jpg" alt="2020年度　国の補助金でさらにおトクに！！「次世代ZEH+」で申請し、要件を満たすことで補助金">
    </p>
    <div class="contents" style="margin-top:0px;">
    
      <!--ArticleBox-->
      <article id="formBox">
        <section>
          <h1 class="pc"><img src="../resource/ct_200601/img/mainImg_form_i01_pc.jpg" alt="トヨタホーム九州　Presents 次世代ZEH+モニターフェア　トヨタホームが実現するこれからの暮らし"></h1>
          <p class="pc">
            <img src="../resource/ct_200601/img/mainImg_form_i02_pc.jpg" alt="次世代ZEH+３つのPremium style搭載アイテムの中から１つをお選びいただけます！Premium style1先進設備+太陽光発電システム+蓄電池。Premium style2 先進設備+太陽光発電システム+エネファームtype。 Premium style3 先進設備+太陽光発電システム+V2Hスタンド。">
            <img src="../resource/ct_200601/img/mainImg_form_i03_pc.jpg" alt="トヨタホームがご提案する「次世代ZEH+」とは？自然災害に強い高品質な住まい+トヨタホーム独自の先進設備（HeMSプラス、全館喚起システムピュア24セントラル）+暮らしに合わせたレジリエンス設備">
            <img src="../resource/ct_200601/img/mainImg_form_i04_pc.jpg" alt="2020年度　国の補助金でさらにおトクに！！「次世代ZEH+」で申請し、要件を満たすことで補助金">
          </p>
          
          <div class="pdf-box bdf_dlbox-01">
            <a href="../resource/ct_200601/img/flyer.pdf" target="_blank" class="flyer-link">詳細はこちらのチラシPDFをご覧ください</a>
          </div>        
          
          
          <form id="Form" name="form1" method="post" action="">
            
            <h2>Premium styleをおひとつお選びください。</h2>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr class="gry">
                <td>
                  <ul class="planbox p02">
                    <li><!--{$form.PlanGrp.plan.0.html}--></li>
                    <li><!--{$form.PlanGrp.plan.1.html}--></li>
                    <li><!--{$form.PlanGrp.plan.2.html}--></li>              
                  </ul>  
                  <!--{$form.PlanGrp.error}-->
                </td>
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
                  <span>※ハイフン無し</span>
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
                  <span>※ハイフン無し</span>
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
                <th>ご職業<strong>（※）</strong></th>
                <td>
                  <!--{$form.Job.html}-->
                  <!--{$form.Job.error}-->
                </td>
              </tr>
              <tr>
                <th>お勤め先<strong>（※）</strong></th>
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
                  <span>※ご希望エリアと<br class="sp">坪数をお書きください</span>
                </td>
              </tr>
              <tr class="gry">
                <th>ご希望の<br>連絡方法</th>
                <td class="time">
                  <!--{$form.contact01.html}-->
                  <br class="sp">
                  <!--{$form.contact02.html}-->
                  <br class="sp">
                  <!--{$form.contact03.html}-->
                  <!--{$form.ContactOther.html}-->
                  <br class="sp">
                </td>
              </tr>
              <tr>
                <th>ご連絡可能な<br>時間帯</th>
                <td class="time">
                  <!--{$form.t01.html}-->
                  <br class="sp">
                  <!--{$form.t02.html}-->
                  <br class="sp">
                  <!--{$form.t03.html}-->
                  <br class="sp">
                  <!--{$form.t04.html}-->
                  <br class="sp">
                  <br class="pc">
                  <!--{$form.t05.html}-->
                  <br class="sp">
                </td>
              </tr>
              <tr class="gry">
                <th>弊社担当者が<br class="sp">いる場合<br />入力ください</th>
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
                </td>
              </tr>
            </table>
            
            <div id="privacy">
              <span><!--{$form.Privacy.html}--></span>
              <!--{$form.Privacy.error}-->
              <p>「<a href="https://toyotahome-kyushu.co.jp/privacy">プライバシーポリシー</a>」内のお客様情報保護方針にご同意いただいた上、確認画面にお進みください。</p>
            </div>            
            <ul id="btnBox">
              <li><input name="confirm" type="submit" value="確認する"></li>
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
<!--▼郵便番号住所検索-->
<script src="./resource/js/ajaxzip2/ajaxzip2.js" charset="UTF-8"></script>
<script type="text/javascript">
AjaxZip2.JSONDATA = './resource/js/ajaxzip2/data';
</script>
<script type="text/javascript">
  $(function(){
    var nowchecked = $('input[name=plan]:checked').val();
    $('input[name=plan]').click(function(){
        if($(this).val() == nowchecked) {
            $(this).prop('checked', false);
            nowchecked = false;
        } else {
            nowchecked = $(this).val();
        }
    });
  });
</script>
<!--△郵便番号住所検索-->    
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
