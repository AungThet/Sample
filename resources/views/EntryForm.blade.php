<!DOCTYPE html>
<html lang="ja-JP">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>お問い合わせ 入力画面│株式会社スカラネクスト</title>
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="all">
    <meta name="author" content="株式会社スカラネクスト">
    <meta name="copyright" content="株式会社スカラネクスト">
    
    <link rel="shortcut icon" href="./resources/views/img/favicon.ico">
    <link rel="stylesheet" href="./css/common_01.css">
    <link rel="stylesheet" href="./css/inquiry_01.css">
</head>

<body>
    <a name="pagetop"></a>
    <div id="wrap" class="inquiry">

        <!-- header -->
        <div id="header">
            <div id="hd_menu">
                <div class="logo"><a href="http://scala-next.com/mm/" target="_blank">株式会社スカラネクスト</a></div>
            </div>
        </div>
        <!-- /#header -->

        <!-- content -->
        <div class="content">

            <!-- main -->
            <div class="main">
                <div class="h1ttl">
                    <h1>お問い合わせ　入力画面</h1>
                </div><!-- h1ttl -->

                <div class="mainbox">
                    <form method="post" action="./ConfirmForm">
                        @csrf
                        <div id="form_caution">
                            <p>株式会社スカラネクストへのお問い合わせは、下記フォームからお願いいたします。</p>
                            <div class="form_list">
                                <ul>
                                    <li>半角カタカナは使用しないでください。数字は半角でお願いします。</li>
                                    <li>当フォームは、128bit SSL通信(暗号化通信)によって、第三者の盗聴、改ざん、なりすましなどから保護されています。</li>
                                    <li>送信いただいた情報は、お問い合わせ対応以外には使用しません。</li>
                                </ul>
                            </div>
                        </div>

                        <div class="entry_detail">
                            <div id="form_inq">
                                <div class="h2ttl">
                                    <h2>お問い合わせ項目</h2>
                                </div>
                                <div class="table_area">
                                    <table>
                                        <tr class="required ">
                                            <th>お問い合わせ内容</th>
                                            <td>
                                                <select class="txt" size="1" name="subject">
                                                    <option class="ser-" value="">下記から項目をお選びください</option>
                                                    <option class="ser-igift" value="i-gift">i-giftについて</option>
                                                    <option class="ser-ivr" value="ivr">Saas型IVRについて</option>
                                                    <option class="ser-isearch" value="i-search">i-searchについて</option>
                                                    <option class="ser-iask" value="i-ask">i-askについて</option>
                                                    <option class="ser-ilinkcheck" value="i-linkcheck">i-linkcheckについて</option>
                                                    <option class="ser-iprint" value="i-print">i-printについて</option>
                                                    <option class="ser-icatalog" value="i-catalog">i-catalogについて</option>
                                                    <option class="ser-iflow" value="i-flow">i-flowについて</option>
                                                    <option class="ser-ilinkplus" value="i-linkplus">i-linkplusについて</option>
                                                    <option class="ser-ishopnavi" value="i-shopnavi">i-shopnaviについて</option>
                                                    <option class="ser-ipoint" value="i-point">i-pointについて</option>
                                                    <option class="ser-ilivechat" value="i-livechat">i-livechatについて</option>
                                                    <option class="ser-hosting" value="hosting">ホスティングサービスについて</option>
                                                    <option class="ser-icampaign" value="i-campaign">キャンペーンサービスについて</option>
                                                    <option class="ser-others" value="others">その他(会社に関する事など)について</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="reqrired ">
                                            <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                            <td>
                                                <textarea class="broad" wrap="physical" rows="5" cols="60" name="opinion" placeholder="内容を入力してください"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div><!-- /.table_area -->
                            </div><!-- /#form_inq -->

                            <div id="form_info">
                                <div class="h2ttl">
                                    <h2>お客さまの情報</h2>
                                </div>
                                <div class="table_area">
                                    <table>
                                        <tr class="required ">
                                            <th>会社名 / 団体名</th>
                                            <td><input type="text" name="company" placeholder="会社名を入力してください" value="">
                                            </td>
                                        </tr>
                                        <tr class="optional ">
                                            <th>部署名</th>
                                            <td><input type="text" name="section" placeholder="部署名を入力してください" value="">
                                            </td>
                                        </tr>
                                        <tr class="required ">
                                            <th>お名前</th>
                                            <td><input type="text" name="name" class="required" placeholder="お名前を入力してください" value="">
                                            </td>
                                        </tr>
                                        <tr class="optional ">
                                            <th>ふりがな</th>
                                            <td><input type="text" name="ruby" class="required" placeholder="ふりがなを入力してください" value="">
                                            </td>
                                        </tr>
                                        <tr class="required ">
                                            <th>電話番号<br>(半角数字/ハイフン無し)</th>
                                            <td><input type="text" name="tel" placeholder="電話番号を入力してください" value="">
                                            </td>
                                        </tr>
                                        <tr class="required ">
                                            <th>メールアドレス(半角英数字)</th>
                                            <td><input type="text" name="mailaddress" class="required" placeholder="メールアドレスを入力してください" value="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- /#form_info -->

                            <div id="form_notice">
                                <div class="h2ttl">
                                    <h2>お問い合わせをいただく前の注意</h2>
                                </div>
                                <div class="form_notice_area">
                                    <div class="form_list">
                                        <ul>
                                            <li>お客様のご入力いただく個人情報を含む情報は、問い合わせに対する回答を差し上げるために利用させていただきます。</li>
                                            <li>お客様は、お客様ご自身の個人情報について、開示、訂正、削除をご請求いただけます。その際には下記お問い合わせ先までご連絡ください。</li>
                                            <li>同意いただけない場合には、弊社からのご回答を差し上げることができない場合がございますので、ご了承ください。</li>
                                            <li>お客様の個人情報の取扱全般に関する当社の考え方をご覧になりたい方は、下記の個人情報保護方針のページをご覧ください。</li>
                                        </ul>
                                    </div>
                                    <div class="to_inquiry">
                                        <p>お問い合わせ先：株式会社スカラネクスト<br>TEL:03-6418-3972</p>
                                    </div>
                                </div>
                                <!-- /.form_notice_area -->

                                <div class="doui_area">
                                    <p>お問い合わせいただく前の注意に同意いただける場合は、<br>下記の「同意する」にチェックをつけ、「確認画面へ進む」ボタンを押してください。</p>
                                    <div class="privacy_check">
                                        <input type="checkbox" name="agree" id="doi"><label for="doi">同意する</label>
                                    </div>
                                </div><!-- ./doui_area -->

                            </div>
                            <!-- /.form_notice -->

                            <div class="btn_area">
                                <input type="submit" name="send" value="確認画面へ進む" class="btn btn_confirm">
                                <input type="hidden" name="token" value="">
                            </div>

                        </div><!-- /.entry_detail -->
                    </form>

                </div><!-- /.mainbox -->

            </div><!-- /.main -->

        </div>
        <!-- /.content -->

        <!-- footer -->
        <div id="footer">
            <div class="pgtop">
                <p><a href="#pagetop">このページトップへ</a></p>
            </div>
            <div class="ft_guide">
                <div class="ft_guide_in">
                    <ul>
                        <li><a href="https://scalagrp.jp/guide/privacy.html" target="_blank">個人情報保護方針</a></li>
                        <li><a href="https://scalagrp.jp/guide/security.html" target="_blank">情報セキュリティポリシー</a></li>
                    </ul>
                    <p class="copy">Copyright &copy; Scala Next, Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- /#footer -->

    </div>
    <!-- /#wrap -->

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/smoothscroll.js"></script>
    <script type="text/javascript" src="{!! url('/js/inquiry-common.js') !!}"></script>
</body>

</html>