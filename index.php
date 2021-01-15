<?php
require_once './include/define.php';


// Libs
require_once 'HTML/QuickForm.php';
require_once 'HTML/QuickForm/Renderer/ArraySmarty.php';

// 共通関数
require_once 'user_function.php';

class Mail_Form
{
    // private $_pref;
    private $_smarty;
    // private $_add;
    // private $_days;

    public function __construct($smarty)
    {

        $this->_sale = array(
        0 => '申し込む',
        1 => '詳しい話が聞きたい',
        );

        $this->_plan = array(       
          0 => '<span class="price"></span>',
          1 => '<span class="price">ゆったり平屋スタイル 3LDK＋W.I.C＋スマート和室  1,730万円（税別）</span>',
          2 => '<span class="price">セミオーダースタイル 3LDK＋W.I.C＋スマート和室  1,730万円（税別）</span>',
        );

        $this->_contact = array(
        'contact01' => '<span>電話</span>',
        'contact02' => '<span>E-mail</span>',
        'contact03' => '<span>その他</span>',
        );

        $this->_timezone = array(
        't01' => '<span>10:00～12:00</span>',
        't02' => '<span>12:00～13:00</span>',
        't03' => '<span>13:00～15:00</span>',
        't04' => '<span>15:00～17:00</span>',
        't05' => '<span>17:00以降</span>',
        );

        $this->_job = array(
        ''  => 'お選び下さい',
        '会社員' => '会社員',
        '公務員' => '公務員',
        '自営業' => '自営業',
        '主婦' => '主婦',
        '学生' => '学生',
        'その他' => 'その他',
        );

        $this->_land = array(
        'ある' => 'ある',
        'ない' => 'ない',
        );
      
        $this->_moving = array(
        ''  => 'お選び下さい',
        '3月頃' => '3月頃',
        '6月頃' => '6月頃',
        '9月頃' => '9月頃',
        'それ以上' => 'それ以上',
        '未定' => '未定',
        );
                      
        // $this->_archtec = array(
        // 'c01' => '<span>新築</span>',
        // 'c02' => '<span>建替</span>',
        // 'c03' => '<span>住替</span>',
        // 'c04' => '<span>単世帯</span>',
        // 'c05' => '<span>二世帯</span>',
        // );

        // $this->_known1 = array(
        // ''  => 'お選び下さい',
        // '中日新聞' => '中日新聞',
        // '朝日新聞' => '朝日新聞',
        // '日経新聞' => '日経新聞',
        // );

        // $this->_known2 = array(
        // ''  => 'お選び下さい',
        // '中日新聞（チラシ）' => '中日新聞',
        // '朝日新聞（チラシ）' => '朝日新聞',
        // '日経新聞（チラシ）' => '日経新聞',
        // );

        // $this->_known3 = array(
        // ''  => 'お選び下さい',
        // 'SUUMO新築マンション' => 'SUUMO新築マンション',
        // 'アンジュ東海' => 'アンジュ東海',
        // );

        // $this->_known4 = array(
        // ''  => 'お選び下さい',
        // '物件HP' => '物件HP',
        // '売主HPのバナー' => '売主HPのバナー',
        // '住友不動産販売HP' => '住友不動産販売HP',
        // '検索サイト(Yahoo!・google)'  => '検索サイト(Yahoo!・google)',
        // 'SUUMO'  => 'SUUMO',
        // 'Yahoo!不動産'  => 'Yahoo!不動産',
        // 'アットホーム'  => 'アットホーム',
        // '新築HOME’S'  => '新築HOME’S',
        // 'バナー広告'  => 'バナー広告',
        // );

        // $this->_known5 = array(
        // ''  => 'お選び下さい',
        // '建設地' => '建設地',
        // 'モデルルーム' => 'モデルルーム',
        // '交通広告(駅構内/電車内)' => '交通広告(駅構内/電車内)',
        // 'ロードサイド' => 'ロードサイド',
        // );

        // $this->_known6 = array(
        // ''  => 'お選び下さい',
        // 'ダイレクトメール' => 'ダイレクトメール',
        // '宅配・手渡しチラシ' => '宅配・手渡しチラシ',
        // '紹介' => '紹介',
        // );


        // $this->_parking = array(
        // ''  => 'お選び下さい',
        // '不要' => '不要',
        // '1台' => '1台',
        // '2台' => '2台',
        // );

        // $this->_purchase_season = array(
        // ''  => 'お選び下さい',
        // '至急' => '至急',
        // '3ヶ月以内' => '3ヶ月以内',
        // '半年以内' => '半年以内',
        // '1年以内' => '1年以内',
        // '2年以内' => '2年以内',
        // '条件次第' => '条件次第',
        // );

        // $this->_construction_place_cognition = array(
        // ''  => 'お選び下さい',
        // '知っている' => '知っている',
        // '知らない' => '知らない',
        // );

        // $this->_now_house = array(
        // ''  => 'お選び下さい',
        // '賃貸マンション' => '賃貸マンション',
        // '賃貸公団公社' => '賃貸公団公社',
        // '社宅・官舎' => '社宅・官舎',
        // '民間アパート' => '民間アパート',
        // '戸建借家' => '戸建借家',
        // '親族と同居' => '親族と同居',
        // '戸建' => '戸建',
        // '分譲マンション' => '分譲マンション',
        // '公団公社分譲' => '公団公社分譲',
        // );

        // $this->_floor_plans = array(
        // '1' => '1LDK',
        // '2' => '2LDK',
        // '3' => '3LDK',
        // '4' => '4LDK',
        // '5' => '5LDK～',
        // );

        // $this->_breadth = array(
        // ''  => 'お選び下さい',
        // '60m2以下' => '～60m2',
        // '70m2以下' => '～70m2',
        // '75m2以下' => '～75m2',
        // '80m2以下' => '～80m2',
        // '85m2以下' => '～85m2',
        // '90m2以下' => '～90m2',
        // '100m2以下' => '～100m2',
        // '120m2以下' => '～120m2',
        // '120m2超' => '120m2超',
        // );


        // $this->_budget = array(
        // ''  => 'お選び下さい',
        // '3000万円以下'  => '～3000万円',
        // '3500万円以下'  => '～3500万円',
        // '4000万円以下'  => '～4000万円',
        // '4500万円以下'  => '～4500万円',
        // '5000万円以下'  => '～5000万円',
        // '5500万円以下'  => '～5500万円',
        // '6000万円以下'  => '～6000万円',
        // '7000万円以下'  => '～7000万円',
        // '8000万円以下'  => '～8000万円',
        // '1億円以下'  => '?1億円',
        // '1億円超'  => '1億円超',
        // );


        // $this->_consideration = array(
        // ''  => 'お選び下さい',
        // '家が古い'  => '家が古い',
        // '家が狭い'  => '家が狭い',
        // '家賃が高い'  => '家賃が高い',
        // '環境が悪い'  => '環境が悪い',
        // '結婚・世帯分け'  => '結婚・世帯分け',
        // '転勤'  => '転勤',
        // '通勤・通学に不便'  => '通勤・通学に不便',
        // 'セカンドハウス'  => 'セカンドハウス',
        // '投資'  => '投資',
        // '家族のため'  => '家族のため',
        // '持家希望'  => '持家希望',
        // '社宅期限'  => '社宅期限',
        // );


        $this->_smarty = $smarty;
    }

    public function process()
    {
        global $CONF;


        // ------------------------------------------
        // フォーム要素の定義
        // ------------------------------------------
        $form = new HTML_QuickForm('Form', 'post', '', '');
        $renderer = new HTML_QuickForm_Renderer_ArraySmarty($this->_smarty);

        // ご来場人数
        // $form->addElement('text', 'count', '', 'id="FormCount" class="t01" maxlength="2" style="ime-mode:disabled"');

        // 「決算感謝 SALE」に
        $SaleGrp = array();
        foreach ($this->_sale as $key=>$val) {
          $arr = array('id' => 'FormSale_' . $key);
          $SaleGrp[] = $form->createElement('radio', 'sale', '', $val, $key, $arr);
        }
        $form->addGroup($SaleGrp, 'SaleGrp', '', '', false);

        // ご希望プラン

        $form->addElement('advcheckbox', 'planWC1', '', '<span class="price">災害時も安心な暮らし 3LDK＋W.I.C+納戸＋スマート和室 2,130万円（税別）</span>', null, null);

        $PlanGrp = array();
        foreach ($this->_plan as $key=>$val) {
          $arr = array('id' => 'FormPlan_' . $key);
          $PlanGrp[] = $form->createElement('radio', 'plan', '', $val, $key, $arr);
        }
        $form->addGroup($PlanGrp, 'PlanGrp', '', '', false);

        // 名前
        // $KanjiGrp = array();
        // $KanjiGrp[] = $form->createElement('text', 'KanjiSei', '', 'title="姓" id="FormKanjiSei" class="t01 jq-placeholder" style="ime-mode:active" placeholder="姓"');
        // $KanjiGrp[] = $form->createElement('text', 'KanjiMei', '', 'title="名"　id="FormKanjiMei" class="t01 jq-placeholder" style="ime-mode:active" placeholder="名"');
        // $form->addGroup($KanjiGrp, 'KanjiGrp', '', '&nbsp;', false);
        $form->addElement('text', 'Kanji', '', 'title="お名前" id="FormKanji" class="ti jq-placeholder" style="ime-mode:active" placeholder="お名前"');

        // フリガナ
        // $KanaGrp = array();
        // $KanaGrp[] = $form->addElement('text', 'KanaSei', '', 'title="セイ" id="FormKanaSei" class="t01 jq-placeholder" style="ime-mode:active" placeholder="セイ"');
        // $KanaGrp[] = $form->addElement('text', 'KanaMei', '', 'title="メイ" id="FormKanaMei" class="t01 jq-placeholder" style="ime-mode:active" placeholder="メイ"');
        // $form->addGroup($KanaGrp, 'KanaGrp', '', '&nbsp;', false);
        $form->addElement('text', 'Kana', '', 'title="ふりがな" id="FormKana" class="ti jq-placeholder" style="ime-mode:active" placeholder="ふりがな"');

        // 郵便番号
        $form->addElement('text', 'Zip', '', 'id="FormZip" class="ti gmh" maxlength="7" style="ime-mode:disabled" onKeyUp="AjaxZip2.zip2addr(\'Zip\',\'Pref\',\'Add1\',\'\',\'Add3\',\'Add2\');" placeholder="例）0000000"');

        // 都道府県
        // $form->addElement('select', 'Pref', '', $this->_pref, 'id="FormPref" class="gmh p-region"');
        $form->addElement('text', 'Pref', '', 'title="都道府県" id="FormPref" class="ti jq-placeholder" style="ime-mode:active" placeholder="都道府県"');

        // 市区町村
        $form->addElement('text', 'Add1', '', 'title="市区町村" id="FormAdd1" class="ti jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="市区町村"');

        // それ以降
        $form->addElement('text', 'Add2', '', 'title="それ以降" id="FormAdd2" class="ti jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="それ以降"');

        // ご連絡先番号
        $form->addElement('text', 'Tel', '', 'title="ご連絡先番号" id="FormTel" class="ti jq-placeholder" maxlength="11" style="ime-mode:disabled" placeholder="例）0000000000"');

        // メールアドレス
        $form->addElement('text', 'Email', '', 'title="Eメール" id="FormMail" class="ti jq-placeholder" maxlength="100" style="ime-mode:disabled" placeholder="Eメール"');

        // ご年齢
        $form->addElement('text', 'Age', '', 'title="年齢" id="FormAge" class="ti t01" maxlength="3" style="ime-mode:disabled" placeholder="年齢"');

        // ご職業
        $form->addElement('select', 'Job', '', $this->_job, 'id="jumpMenu" class=""');

        // お勤め先
        $form->addElement('text', 'Company', '', 'title="お勤め先" id="FormCompany" class="ti jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="お勤め先"');

        // 土地所有
        $LandGrp = array();
        foreach ($this->_land as $key=>$val) {
          $arr = array('id' => 'FormLand_' . $key);
          $LandGrp[] = $form->createElement('radio', 'land', '', $val, $key, $arr);
        }
        $form->addGroup($LandGrp, 'LandGrp', '', '&nbsp;', false);
        // $form->addGroup($LandGrp, 'LandGrp', '', 'class="sp"', false);
      
        // 入居希望月
        $form->addElement('select', 'moving', '', $this->_moving, 'id="movingMenu" class=""');

        // 建築計画
        //foreach ($this->_archtec as $key=>$val) {
        // $form->addElement('advcheckbox', $key, '', $val, null, null);
        //}

        // 築年数
        //$form->addElement('text', 'BuildingAge', '', 'title="築年数" id="BuildingAge" class="t01" maxlength="3" style="ime-mode:disabled"');

        // エリア 坪数
        $form->addElement('text', 'Area', '', 'title="エリア坪数" id="FormArea" class="ti jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="ご希望エリアと坪数"');

        // 連絡方法
        foreach ($this->_contact as $key=>$val) {
            $form->addElement('advcheckbox', $key, '', $val, null, null);
        }

        $form->addElement('text', 'ContactOther', '', 'title="連絡方法その他" id="FormContactOther" class="ti jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="その他の連絡方法"');

        // 連絡時間帯
        foreach ($this->_timezone as $key=>$val) {
            $form->addElement('advcheckbox', $key, '', $val, null, null);
        }

        // ご質問 ご相談
        $form->addElement('textarea', 'Comment', '', 'title="ご質問・ご相談" id="idComment" cols="" rows="" class="te01 jq-placeholder" style="ime-mode:active" placeholder="ご質問・ご相談"');

        // 担当者
        $form->addElement('text', 'Tanto', '', 'title="担当者名" id="FormTanto" class="ti jq-placeholder sss" maxlength="50" style="ime-mode:active" placeholder="担当者名"');

        // 展示場名
        $form->addElement('text', 'Tenjijo', '', 'title="展示場名" id="FormTenjijo" class="ti jq-placeholder sss" maxlength="50" style="ime-mode:active" placeholder="展示場名"');

        // 丁目番地
        // $form->addElement('text', 'Add3', '', 'title="丁目番地" id="FormAdd3" class="t03 gmh jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="丁目番地"');

        // マンション名・部屋番号
        // $form->addElement('text', 'Add4', '', 'title="マンション名・部屋番号" id="FormAdd4" class="t03 jq-placeholder" maxlength="50" style="ime-mode:active" placeholder="マンション名・部屋番号"');

        // メールアドレス確認
        // $form->addElement('text', 'EmailConf', '', 'id="FormMailConf" class="t04" maxlength="100" style="ime-mode:disabled"');

        // $KnownGrp = array();
        // $KnownGrp[] = $form->createElement('select', 'Known1', '', $this->_known1, 'id="FormKnown1" class="t05"');
        // $KnownGrp[] = $form->createElement('select', 'Known2', '', $this->_known2, 'id="FormKnown2" class="t05"');
        // $KnownGrp[] = $form->createElement('select', 'Known3', '', $this->_known3, 'id="FormKnown3" class="t05"');
        // $KnownGrp[] = $form->createElement('select', 'Known4', '', $this->_known4, 'id="FormKnown4" class="t05"');
        // $KnownGrp[] = $form->createElement('select', 'Known5', '', $this->_known5, 'id="FormKnown5" class="t05"');
        // $KnownGrp[] = $form->createElement('select', 'Known6', '', $this->_known6, 'id="FormKnown6" class="t05"');
        // $form->addGroup($KnownGrp, 'KnownGrp', '', '', false);


        // // ご入居人数
        // $form->addElement('text', 'FamilyNum', '', 'id="FormFamilyNum" class="t02" maxlength="50" style="ime-mode:disabled"');

        // // 駐車場
        // $form->addElement('select', 'Parking', '', $this->_parking, 'id="FormParking" class="t05"');

        // // ご購入時期
        // $form->addElement('select', 'PurchaseSeason', '', $this->_purchase_season, 'id="FormPurchaseSeason" class="t05"');

        // // 現地をご存知ですか
        // $form->addElement('select', 'ConstructionPlaceCognition', '', $this->_construction_place_cognition, 'id="FormConstructionPlaceCognition" class="t05"');

        // // 現在のお住まい
        // $form->addElement('select', 'NowHouse', '', $this->_now_house, 'id="FormNowHouse" class="t05"');

        // // ご希望の間取り
        // $FloorPlansGrp = array();
        // foreach ($this->_floor_plans as $key=>$val) {
        //     $arr = array('id' => 'FormFloorPlans_' . $key);
        //     $FloorPlansGrp[] = $form->createElement('advcheckbox', 'FloorPlans_'.$key, null, $val, $arr, array('', $val));
        // }
        // $form->addGroup($FloorPlansGrp, 'FloorPlansGrp', '', '&nbsp;&nbsp;', true);

        // // ご希望の広さ
        // $form->addElement('select', 'Breadth', '', $this->_breadth, 'id="FormBreadth" class="t05"');

        // // ご予算
        // $form->addElement('select', 'Budget', '', $this->_budget, 'id="FormBudget" class="t05"');

        // // ご年収
        // $form->addElement('text', 'Income', '', 'id="FormIncome" class="t02" maxlength="50" style="ime-mode:disabled"');

        // // 自己資金
        // $form->addElement('text', 'OwnResources', '', 'id="FormOwnResources" class="t02" maxlength="50" style="ime-mode:disabled"');

        // // ご検討のきっかけ
        // $form->addElement('select', 'Consideration', '', $this->_consideration, 'id="FormConsideration" class="t05"');

        //  個人情報保護方針
        $form->addElement('checkbox', 'Privacy', '', '個人情報保護方針に同意する', 'id="FormPrivacy"');

        // ------------------------------------------
        // デフォルト値の設定
        // ------------------------------------------
        // $defaults = array('Pref' => '愛知県');
        // $form->setDefaults($defaults);

        // ------------------------------------------
        // ルール/フィルタの定義
        // ------------------------------------------

        //function existPlan($fields){
//            if($fields['planWC1'] || $fields['plan']){
//                return true;
//            }
//            return array('PlanGrp' => '<p class="error">※Wチャンス1またはWチャンス2のどれかひとつは選択してください</p>');
//        }

        // フィルタ
        $form->applyFilter('__ALL__', 'mb_trim');

        // ルール
        // $form->addGroupRule('PlanGrp', '<p class="error">※必須入力です</p>', 'required', null, 1);
        $form->addRule('PlanGrp', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule('SaleGrp', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Kanji', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Kana', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule('Age', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Age', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        // $form->addRule('count', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        // $form->addGroupRule('ZipGrp', '<p class="error">※必須入力です</p>', 'required', null, 2);
        // $zipRule = array(
        //     'Zip1' => array(array('<p class="error">郵便番号(3桁)は半角数字で入力してください</p>', 'regex', '/^[0-9]+$/')),
        //     'Zip2' => array(array('<p class="error">郵便番号(4桁)は半角数字で入力してください</p>', 'regex', '/^[0-9]+$/'))
        // );
        // $form->addGroupRule('ZipGrp', $zipRule);
        $form->addRule('Zip', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Zip', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        $form->addRule('Pref', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Add1', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Add2', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule('Add3', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Tel', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Tel', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        // $form->addRule('Tel', '<p class="error">※半角数字とハイフンで入力してください</p>', 'regex', '/^[0-9\-$]+/');
        $form->addRule('Email', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Email', '<p class="error">※正しい形式で入力してください</p>', 'email');
        // $form->addRule('EmailConf', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule(array('Email', 'EmailConf'), '<p class="error">※メールアドレスが一致しません</p>', 'compare');
        // $form->addGroupRule('KnownGrp', '<p class="error">※必須入力です</p>', 'required', null, 1);
        // $form->addRule('FamilyNum', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        // $form->addGroupRule('FloorPlansGrp', '<p class="error">※必須入力です</p>', 'required', null, 1);
        // $form->addRule('Budget', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule('Breadth', '<p class="error">※必須入力です</p>', 'required');
        // $form->addRule('Income', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        // $form->addRule('OwnResources', '<p class="error">※半角数字で入力してください</p>', 'regex', '/^[0-9]+$/');
        $form->addRule('Job', '<p class="error">※必須入力です</p>', 'required');
        $form->addRule('Company', '<p class="error">※必須入力です</p>', 'required');   
        $form->addRule('Privacy', '<p class="error">※個人情報保護方針に同意してください</p>', 'required');
        $form->addFormRule('existPlan');


        //--------------------------------------------------
        // Request
        //--------------------------------------------------

        $imgError = '';
        $hidden = '';
        if (isset($_POST['confirm']) || isset($_POST['confirm_x']) ) {
            if ($form->validate() == true) {
                $form->freeze();
                $this->_smarty->assign('token', htmlspecialchars(session_id(),ENT_COMPAT, 'UTF-8'));
                $tpl_path = 'confirm.tpl';
            } else {
                $tpl_path = 'index.tpl';
            }
        } elseif (isset($_POST['send']) || isset($_POST['send_x'])) {
            if(session_id() !== $_POST['token']){
                //die('Error:Session Time out.');
                $this->userError('セッションタイムアウト', 'セッションがタイムアウトしました。<br />お手数ですがやり直してください。', $CONF['home_url']);
                exit;
            }

            // if (!$this->checkRemoteAddr()) {
            //     $this->userError('エラー', '重複登録はできません。<br />しばらく時間をおいてやり直してください。', $CONF['home_url']);
            //     exit;
            // }

            if($form->validate() === true) {
                $form->process(array($this, 'contactSend'));
                session_regenerate_id(TRUE);
                $tpl_path = 'complete.tpl';
            } else {
                $tpl_path = 'index.tpl';
            }
        } else {
            $tpl_path = 'index.tpl';
        }

        //--------------------
        // レンダリング
        //--------------------
        $form->accept($renderer);
        $this->_smarty->assign('conf', $CONF);
        $this->_smarty->assign('form',$renderer->toArray());
        $this->_smarty->assign('hidden', $hidden);
        $this->_smarty->display($tpl_path);
//        print_r($_POST);
//        print_r($form);
//        print_r($this->_smarty);
        //print_r($_COOKIE);
        //print_r($contact);


        exit;

    }


    //--------------------
    // メソッド
    //--------------------

    public function contactSend($value)
    {
        global $CONF;

        $value['RegistDate'] = date("Y/m/d H:i:s");
        $value['RemoteAddr'] = $_SERVER["REMOTE_ADDR"];
        $value['UserAgent'] = $_SERVER['HTTP_USER_AGENT'];

        // UTM
        $value['UTM'] = $this->getUTM();

        // // トランザクション開始
        // $mdb2->beginTransaction();

        // $set = array();

        // $set[] = $mdb2->quote($value['KanjiSei'], 'text');
        // $set[] = $mdb2->quote($value['KanjiMei'], 'text');
        // $set[] = $mdb2->quote($value['KanaSei'], 'text');
        // $set[] = $mdb2->quote($value['KanaMei'], 'text');
        // $set[] = $mdb2->quote($value['Age'], 'text');
        // $set[] = $mdb2->quote($value['Sex'], 'text');
        // $set[] = $mdb2->quote($value['Zip'], 'text');
        // $set[] = $mdb2->quote($value['Pref'], 'text');
        // $set[] = $mdb2->quote($value['Add1'], 'text');
        // $set[] = $mdb2->quote($value['Add2'], 'text');
        // $set[] = $mdb2->quote($value['Add3'], 'text');
        // $set[] = $mdb2->quote($value['Add4'], 'text');
        // $set[] = $mdb2->quote($value['Tel'], 'text');
        // $set[] = $mdb2->quote($value['Email'], 'text');
        // $set[] = $mdb2->quote($value['Known1'], 'text');
        // $set[] = $mdb2->quote($value['Known2'], 'text');
        // $set[] = $mdb2->quote($value['Known3'], 'text');
        // $set[] = $mdb2->quote($value['Known4'], 'text');
        // $set[] = $mdb2->quote($value['Known5'], 'text');
        // $set[] = $mdb2->quote($value['Known6'], 'text');
        // $set[] = $mdb2->quote($value['Job'], 'text');
        // $set[] = $mdb2->quote($value['FamilyNum'], 'text');
        // $set[] = $mdb2->quote($value['Parking'], 'text');
        // $set[] = $mdb2->quote($value['PurchaseSeason'], 'text');
        // $set[] = $mdb2->quote($value['ConstructionPlaceCognition'], 'text');
        // $set[] = $mdb2->quote($value['NowHouse'], 'text');
        // if ($value['FloorPlansGrp']) {
        //     $set[] = $mdb2->quote(implode(':', array_filter($value['FloorPlansGrp'])), 'text');
        // }
        // $set[] = $mdb2->quote($value['Breadth'], 'text');
        // $set[] = $mdb2->quote($value['Budget'], 'text');
        // $set[] = $mdb2->quote($value['Income'], 'text');
        // $set[] = $mdb2->quote($value['OwnResources'], 'text');
        // $set[] = $mdb2->quote($value['Consideration'], 'text');
        // $set[] = $mdb2->quote($value['RegistDate'], 'text');
        // $set[] = $mdb2->quote($value['RemoteAddr'], 'text');

        // $query = "INSERT INTO `inquiry` (
        //     `KanjiSei`,
        //     `KanjiMei`,
        //     `KanaSei`,
        //     `KanaMei`,
        //     `Age`,
        //     `Sex`,
        //     `Zip`,
        //     `Pref`,
        //     `Add1`,
        //     `Add2`,
        //     `Add3`,
        //     `Add4`,
        //     `Tel`,
        //     `Email`,
        //     `Known1`,
        //     `Known2`,
        //     `Known3`,
        //     `Known4`,
        //     `Known5`,
        //     `Known6`,
        //     `Job`,
        //     `FamilyNum`,
        //     `Parking`,
        //     `PurchaseSeason`,
        //     `ConstructionPlaceCognition`,
        //     `NowHouse`,
        //     `FloorPlans`,
        //     `Breadth`,
        //     `Budget`,
        //     `Income`,
        //     `OwnResources`,
        //     `Consideration`,
        //     `RegistDate`,
        //     `RemoteAddr`
        //     ) VALUES ( ";
        //     $query .= implode(' , ', $set) . ' ) ';



        // $result = $mdb2->exec($query);
        // if ( PEAR::isError($result) ) {
        //     $mdb2->rollback();
        //     //$logger->info($query);
        //     //$logger->alert($result->getMessage());
        //     die('contactSend:' . $result->getMessage());
        // }

        // // コミット
        // $mdb2->commit();




        // =====================================
        // メール送信部分
        // =====================================

        $mailSmarty = new Smarty();
        $mailSmarty->template_dir = MAIL_TEMPLATE_DIR;
        $mailSmarty->compile_dir  = SMARTY_COMPILE_DIR;
        $mailSmarty->cache_dir    = SMARTY_CACHE_DIR;
        $mailSmarty->compile_id = realpath($mailSmarty->template_dir);

        // メールヘッダ
        $header = 'From: ' . mb_encode_mimeheader(MAIL_FROM_NAME) . '<' . MAIL_FROM_ADDR . '>';

        // 管理者宛
        $subject = '【WChance FAIR】応募がありました';

        $mailSmarty->assign('v', $value);
        $tpl_path = 'mail_contact.txt';
        $body = $mailSmarty->fetch($tpl_path);
        $body = mb_convert_kana($body, 'KV');

        if ( !attach_mail($CONF['contact_addr'], $subject, $body, $header, "-f " . MAIL_FROM_ADDR) ) {
            echo "send error1";
            exit;
        }

        // 送信者宛
        //$user_subject = MAIL_SUBJECT;
        $user_subject = '【トヨタホーム九州】WChance FAIR';

        $user_tpl_path = 'mail_contact_sender.txt';
        $user_body = $mailSmarty->fetch($user_tpl_path);
        $user_body = mb_convert_kana($user_body, 'KV');
        $to = $value['Email'];

        if ( !attach_mail($to, $user_subject, $user_body, $header, "-f " . MAIL_FROM_ADDR) ) {
            echo "send error2";
            exit;
        }

        // 差出人
        //$subject = MAIL_SUBJECT;
        //$tpl_path = 'mail_contact_sender.txt';
        //$body = $mailSmarty->fetch($tpl_path);
        //$body = mb_convert_kana($body, 'KV');
        //$to = $value['Email'];
        //if ( !attach_mail($to, $subject, $body, $header, "-f " . MAIL_FROM_ADDR) ) {
        //   echo "send error2";
        //    exit;
        //}
    }

    private function getCheckboxArray($arrList, $value)
    {
        $arrRet = array();
        foreach($arrList as $key=>$val) {
            if (isset($value[$key]) && $value[$key] != "") {
                $arrRet[] = $val;
            }
        }
        return $arrRet;
    }

    // private function checkRemoteAddr()
    // {
    //     global $CONF, $mdb2;

    //     // 待機秒数
    //     $spanSec = 3 * 60;
    //     $limitDate = date("Y-m-d H:i:s", time() - $spanSec);

    //     $query = "SELECT * FROM inquiry WHERE RemoteAddr = " . $mdb2->quote($_SERVER['REMOTE_ADDR'], 'text') . " AND RegistDate > " . $mdb2->quote($limitDate, 'date');

    //     $result = $mdb2->query($query);
    //     if (PEAR::isError($result)) {
    //         die($result->getMessage());
    //     }
    //     $result->fetchRow();
    //     if ($result->rowCount() > 0) {
    //         return false;
    //     }
    //     return true;
    // }

    private function userError($title, $message, $homeUrl)
    {
        // セッション変数を全て解除する
        $_SESSION = array();

        // セッションを切断するにはセッションクッキーも削除する。
        // Note: セッション情報だけでなくセッションを破壊する。
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-42000, '/');
        }

        // 最終的に、セッションを破壊する
        session_destroy();

        $this->_smarty->assign('title', $title);
        $this->_smarty->assign('message', $message);
        $this->_smarty->assign('homeUrl', $homeUrl);
        $this->_smarty->display('error.tpl');


    }

    private function getUTM()
    {

        // リファラCOOKIEチェック
        $params = array();
        
        // PC/SP
        $params['device_str'] = ($this->is_smartphone()) ? 'SP' : 'PC';
        
        
        if (!isset($_COOKIE['LANDING_REFERER']) || $_COOKIE['LANDING_REFERER'] == 'direct') {
            // リファラCOOKIEが存在しない or ダイレクト流入
            $params['source_str'] = 'ダイレクト';
            $params['media_str'] = '';
            $params['campaign_str'] = ''; 
        } else if(strpos($_COOKIE['LANDING_REFERER'],'www.toyotahome.co.jp') !== false){
            // トヨタホーム公式からの流入
            $params['source_str'] = 'トヨタホーム公式';
            $params['media_str'] = '';
            $params['campaign_str'] = ''; 
        } else {
            // リファラが存在する

            // LANDING_URIにUTMパラメータチェック
            if (isset($_COOKIE['LANDING_URI']) && $_COOKIE['LANDING_URI'] != '') {

                $uri = parse_url($_COOKIE['LANDING_URI']);
                $parse_str = array();
                parse_str($uri['query'], $parse_str);

                if ($parse_str['utm_campaign'] == '2019.01_kyushu_YSS_PC' || $parse_str['utm_campaign'] == '2019.01_kyushu_YSS_SP') {
                    $params['source_str'] = 'Yahoo';
                    $params['media_str'] = 'スポンサードサーチ';   
                    $params['campaign_str'] = $parse_str['utm_campaign'];          
                } else if ($parse_str['utm_campaign'] == '2019.01_kyushu_YRT_PC' || $parse_str['utm_campaign'] == '2019.01_kyushu_YRT_SP') {
                    $params['source_str'] = 'Yahoo';
                    $params['media_str'] = 'YDN';
                    $params['campaign_str'] = $parse_str['utm_campaign']; 
                } else if ($parse_str['utm_campaign'] == '2019.01_hatsuyumeCP') {
                    $params['source_str'] = 'Yahoo';
                    $params['media_str'] = 'ブランドパネル';
                    $params['campaign_str'] = $parse_str['utm_campaign']; 
                } else if ($parse_str['utm_campaign'] == '2019.01_kyushu_ADW_PC' || $parse_str['utm_campaign'] == '2019.01_kyushu_ADW_SP') {
                    $params['source_str'] = 'Google';
                    $params['media_str'] = 'アドワーズ';
                    $params['campaign_str'] = $parse_str['utm_campaign']; 
                } else if ($parse_str['utm_campaign'] == '2019.01_kyushu_GRM_PC' || $parse_str['utm_campaign'] == '2019.01_kyushu_GRM_SP') {
                    $params['source_str'] = 'Google';
                    $params['media_str'] = 'リマーケティング';
                    $params['campaign_str'] = $parse_str['utm_campaign']; 
                } else if ($parse_str['utm_campaign'] == '2019.01_kyushu_GDN_PC' || $parse_str['utm_campaign'] == '2019.01_kyushu_GDN_SP') {
                    $params['source_str'] = 'Google';
                    $params['media_str'] = 'GDN';
                    $params['campaign_str'] = $parse_str['utm_campaign']; 
                } else {
                    $params['source_str'] = 'オーガニック';
                    $params['media_str'] = '';
                    $params['campaign_str'] = ''; 
                }
            }
        }
        $params['LANDING_REFERER'] = (isset($_COOKIE['LANDING_REFERER'])) ? $_COOKIE['LANDING_REFERER'] : '';
        $params['LANDING_URI'] = (isset($_COOKIE['LANDING_URI'])) ? $_COOKIE['LANDING_URI'] : '';
        return $params;
    }

    /**
     * スマホか判定
     * @param  string $ua ユーザエージェント
     * @return boolean スマートフォンからのアクセスか否か
     */
    public function is_smartphone($ua = null)
    {
        if ( is_null($ua) ) {
            $ua = $_SERVER['HTTP_USER_AGENT'];
        }

        if ( preg_match('/iPhone|iPod|iPad|Android/ui', $ua) ) {
            return true;
        } else {
            return false;
        }
    }

}

$mail = new Mail_Form($smarty);
$mail->process();

?>