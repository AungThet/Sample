<!DOCTYPE html>
<html lang="ja-JP">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>お問い合わせ 確認画面│株式会社スカラネクスト</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="robots" content="all">
    <meta name="author" content="株式会社スカラネクスト">
    <meta name="copyright" content="株式会社スカラネクスト">
    <link rel="shortcut icon" href="./img/favicon.ico">
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
                    <h1>お問い合わせ　確認画面</h1>
                </div><!-- h1ttl -->

                <div class="mainbox">
                    <form method="post" action="./CompleteForm">
                        @csrf
                        <div class="entry_detail">
                            <div id="form_inq">
                                <div class="h2ttl">
                                    <h2>お問い合わせ項目</h2>
                                </div>
                                <div class="table_area">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>お問い合わせ内容</th>
                                                <td>
                                                    i-giftについて
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                                <td>
                                                    高山のテスト
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--  #form_inq-->

                            <div id="form_info">
                                <div class="h2ttl">
                                    <h2>お客さまの情報</h2>
                                </div>
                                <div class="table_area">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>会社名 / 団体名<br></th>
                                                <td>
                                                    高山潤
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>部署名</th>
                                                <td>
                                                    マンダレー支社
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>お名前</th>
                                                <td>
                                                    高山　潤
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ふりがな</th>
                                                <td>
                                                    たかやまじゅん
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>電話番号</th>
                                                <td>
                                                    08012345678
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>メールアドレス</th>
                                                <td>
                                                    test@scala-next.com
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- #form_info -->

                            <div class="btn_area">
                                <a href="./EntryForm"><input type="button" value="戻る" class="btn btn_back"></a href="./CompleteForm">
                                <input type="submit" value="送　信" class="btn btn_entry">
                            </div>

                        </div>
                        <!-- /.entry_detail -->
                    </form>

                </div><!-- /.mainbox -->

            </div>
            <!-- /main -->

        </div>
        <!-- /content -->

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

</body>

</html>