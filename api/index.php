<?php
    // error_reporting(0);
    session_start();
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    $protocol = 'https://';
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; //取得目前頁面網址
    $loginUrl = $helper->getLoginUrl($url, $permissions); //取得 Facebook 登入網址


    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }


?>

<?php if (isset($accessToken)) : require_once dirname(__FILE__) . '/facebook_login/statuslogin.php'; ?>
<?php else : ?>
<script>
window.location.href = "<?php echo $loginUrl; ?>";
</script>
<?php endif; ?>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        中華電信股份有限公司 Facebook粉絲專頁 服務個人資料蒐集告知聲明
    </title>
    <meta content="zh-tw" http-equiv="Content-Language" />
    <!--meta-->
    <meta name="title" content="中華電信股份有限公司 Facebook粉絲專頁 服務個人資料蒐集告知聲明" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <!--facebook:og -->
    <meta property="og:title" content="中華電信股份有限公司 Facebook粉絲專頁 服務個人資料蒐集告知聲明" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="../img/fb.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:hashtag" content="" />
    <!--facebook:og-->
    <link rel="shortcut icon" href="favicon.ico" />
    <!--css-->
    <link rel="stylesheet" href="../css/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118980614-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-118980614-2");
    </script>
</head>

<body>


    <div class="header">
        <a class="logo"><img src="../img/logo.svg" /></a>
        <div class="profile">
            <div class="avatar" style="background-image: url('<?php echo $profile["picture"]["url"]; ?>')"></div>
            <p>
                <?php echo $profile["first_name"]; ?> &ensp;
                <?php echo $profile["last_name"]; ?>
            </p>
            <div class="profile-menu">
                <p>fb id: <?php echo $profile["id"]; ?></p>
                <p>user token: <?php echo $accessToken ?></p>
                <a
                    href="api/logout.php?url=<?php echo $protocol; ?><?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">登出</a>
                <a
                    href="<?php echo 'https://www.facebook.com/logout.php?next=https://php-demo-mu.vercel.app/api&access_token=' . $accessToken ?>">登出</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">

            <h2>我的IP <?php echo $ip; ?></h2>
            <h2>LINE官方帳號服務<br />個人資料蒐集告知聲明及同意</h2>

            <div class="privacy">
                <div class="privacy-content">
                    <div class="privacy-box">
                        <p>
                            感謝您加入或綁定本公司LINE官方帳號(以下或稱為「本服務」)好友，本公司重視您的隱私與個人資料保護，並尊重您的個人資料控制權。以下說明本公司如何蒐集、處理、利用您的個人資料，以及您有哪些權利可以行使。請留意，如您不是申請加入或綁定本服務之人(非契約當事人)但使用本服務時（由他人申請加入或綁定但供您使用），以下內容也對您適用。申請加入或綁定本服務之人有義務讓實際使用本服務之人詳閱以下內容。此外，當您加入或綁定本服務時即代表認同LINE官方帳號為多媒體行銷資訊管道，同意對您發送或推薦適合您的商品資訊。
                        </p>
                        <p class="head">1. 誰在蒐集您的個人資料</p>
                        <p>中華電信股份有限公司(以下稱為「我們」)</p>
                        <div class="toggle-content">
                            <p class="head">2. 我們為什麼蒐集您的個人資料(蒐集目的)</p>
                            <ul>
                                <li>消費者、客戶管理與服務</li>
                                <li>調查、統計與研究分析</li>
                                <li>資(通)訊服務/資料庫管理/資通安全與管理</li>
                                <li>行銷</li>
                                <li>經營電信業務與電信加值網路業務</li>
                                <li>會員管理</li>
                                <li>其他諮詢與顧問服務</li>
                                <li>其他經營合於營業登記項目或組織章程所定之業務</li>
                            </ul>
                            <p class="head">3. 我們蒐集您的哪些個人資料，例如：</p>
                            <ul>
                                <li>
                                    <p class="tit">消費者、客戶管理與服務</p>
                                    <p>
                                        包含您於本服務申請網頁填寫的識別類及特徵類個人資料、透過本服務之LINE訊息點擊紀錄、本服務使用記錄、服務歷程紀錄，以及其他與您的帳號相關的個人資料。另為辦理您申請加入或綁定本服務，我們將自LINE
                                        Taiwan(台灣連線股份有限公司)取得您的LINE使用者身分識別碼（LINE
                                        UID）以及其他LINE
                                        Taiwan(台灣連線股份有限公司)有開放存取之相關帳號資訊。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">網路使用資訊</p>
                                    <p>
                                        包含您如何使用我們的LINE官方帳號服務以及我們的LINE官方帳號服務之功效的資訊。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">網頁瀏覽資訊/行動裝置應用程式資訊</p>
                                    <p>
                                        包含您使用我們的LINE官方帳號服務所瀏覽之網頁資訊(例如網址、時間、IP位址等)，以及您的行動裝置應用程式使用資訊(例如應用程式名稱、使用情形等)。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">其他服務資訊</p>
                                    <p>
                                        如您已經或將要成為我們其他服務的客戶/會員，我們可能會將您的個人資料與其他服務之資料串接整併(例如我們指配給您的號碼與網頁資訊)，以便我們對您更加瞭解，並提供更優化、個人化貼切的服務。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">其他資訊</p>
                                    <p>其他您使用我們服務時，於互動過程中所產生的資料。</p>
                                </li>
                                <li>
                                    <p class="tit">用戶使用需求與個人化服務調研</p>
                                    <p>
                                        您對於我們的LINE官方帳號服務之需求背景資料調查，透過與LINE服務平台一般使用情形之數據研析，提升本服務之個人化服務品質及提供或引進更多豐富優質服務。
                                    </p>
                                </li>
                            </ul>
                            <p class="head">4. 我們如何利用您的個人資料</p>

                            <ol>
                                <li>
                                    <p class="tit">4.1 期間及地區</p>
                                    <p>
                                        我們會在您使用本服務(保有帳戶)的期間與地區內利用您的個人資料。當本服務終止或解除(您不再使用本服務)後，我們會在法令要求或許可的範圍與期限內保留及利用您的個人資料，並在該期限後，以無法辨識您的身分之形式保存您使用本服務期間所產生的(非個人)資料。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">4.2 提供/揭露個人資料之對象</p>
                                    <p>
                                        我們可能會將您的個人資料提供給受我們委託的第三人(例如行銷/分析/廣告/公關業者、物流業者、金流業者、資訊服務業者等)，在受委託的範圍內協助我們達成蒐集目的。我們會對委託的第三人執行必要的監督，以確保您的個人資料安全。
                                    </p>
                                </li>
                                <li>
                                    <p class="tit">4.3 利用個人資料之方式</p>
                                    <p>
                                        我們會以必要的方式利用您的個人資料以達成蒐集目的，例如：
                                    </p>
                                    <ul>
                                        <li>為您建立客戶/會員檔案以便我們管理帳戶。</li>
                                        <li>
                                            以您的各類聯繫方式與您業務聯繫，或向您通知與本服務或我們的其他服務有關之資訊。
                                        </li>
                                        <li>
                                            以您的各項聯繫方式向您提供行銷資訊，例如我們的優惠方案、促銷活動、其他更適合您的電信服務方案等。
                                        </li>
                                        <li>
                                            依據行銷互動過程中所蒐集之個人資料，藉以優化我們的各項服務，並可能依分析結果向您推薦適合您的商品/服務
                                        </li>
                                        <li>
                                            分析您的個人資料，並以統計數據、趨勢或其他無法識別您的身分之形式產出結果，對外提供給我們的企業客戶作為商業判斷的依據(例如讓企業客戶瞭解他們的門市熱點、消費者年齡/性別分布、消費者停駐時間等)。
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="tit">4.4 蒐集目的外的利用</p>
                                    <p>
                                        我們只會在蒐集目的之必要範圍內，依前述說明利用您的個人資料，除非：
                                    </p>
                                    <ul>
                                        <li>
                                            法律明文規定。例如受司法機關或主管機關依法要求提供個人資料。
                                        </li>
                                        <li>
                                            為增進公共利益所必要或為防止他人權益之重大危害。例如偵測/預防詐騙或網路犯罪等違法行為。
                                        </li>
                                        <li>為免除您的生命、身體、自由或財產上之危險。</li>
                                        <li>
                                            受公務機關或學術研究機構請託，基於公共利益為統計或學術研究而有必要，以無法識別您的身分之形式，提供資料給該公務機關或學術研究機構；或以可識別您的身分之形式提供資料，但該公務機關或學術研究機構保證所產出並對外揭露之結果無法識別您的身分。
                                        </li>
                                        <li>依法得到您的同意後。</li>
                                        <li>有利於您的權益。</li>
                                    </ul>
                                </li>
                            </ol>
                            <p class="head">5. 您有哪些權利可以行使</p>
                            <ul>
                                <li>
                                    您有權請求查詢、閱覽我們保有您的個人資料，或請求我們提供複製本。但我們依法得酌收必要的成本費用。
                                </li>
                                <li>您有權向我們補充或更正您的個人資料。</li>
                                <li>
                                    當本服務終止或解除後，或您認為我們不再需要您的個人資料時，您有權請求我們刪除、停止處理或利用您的個人資料。但我們因執行業務所必須(例如法令已規定保存期限)，或另外取得您的書面同意時，仍得保存或繼續處理、利用您的個人資料。
                                </li>
                                <li>
                                    如您認為我們違法蒐集、處理或利用您的個人資料時，您有權請求我們刪除、停止處理或利用您的個人資料。但我們會檢視是否有違法情形，並回覆您結果。
                                </li>
                                <li>
                                    如您不願再收到我們的行銷資訊，您有權通知我們拒絕接受行銷。
                                </li>
                                <li>
                                    如您要行使上述各項權利，其行使方式依法令及本公司相關規定，洽本公司各服務中心辦理，或直撥免費客服電話(市話:123、0800-080-123、行動:0800-080-090)、網路客服中心(https://123.cht.com.tw/ecas/B09)諮詢。本公司得依個資法第10條、11條規定，執行業務所必須及法定保存期間等考量，決定是否接受申請。
                                </li>
                            </ul>
                            <p class="head">6. 您若不提供個人資料的影響</p>
                            <p>
                                本服務申請網頁中所列的個人資料均為必填欄位，如未正確、完整填寫，可能無法申辦本服務，或將無法即時收到與本服務相關的必要訊息。
                                <br />
                                <br />
                                其他個人資料是您在使用本服務的過程中(自動)產生並紀錄，若您就我們處理或利用前述個人資料希望行使個資法第11條之權利，請依上述權利行使方式辦理。
                            </p>
                            <p class="head">7. 其他注意事項</p>
                            <p>
                                如您已經成為我們其他服務的客戶/會員，則該等服務之個人資料蒐集告知聲明亦對您有適用。我們各項服務之個人資料蒐集告知聲明，請詳閱我們的官方網站及http://spip-eshop.cdn.hinet.net/
                                <br />
                                <br />
                                您瞭解並同意本服務係由我們透過LINE平台提供，LINE公司可能知悉及/或存取我們與您之間經由LINE平台所傳遞之資訊(包括但不限於前述個人資料)。有關LINE公司之隱私權政策，請您自行參閱LINE公司官方網站說明。
                            </p>
                        </div>
                        <div class="toggle">
                            <div>顯示顯示內容</div>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>

                <div class="privacy-bottom">
                    <div class="form-item" id="read-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="read" id="read" />
                            <label class="form-check-label" for="read">
                                我已閱讀並同意 中華電信Facebook粉絲專頁
                                服務個人資料蒐集告知條款
                                <span class="form-check-label-alert">請勾選此處！</span>
                            </label>
                        </div>
                    </div>
                    <div class="agree-content">
                        <p class="text">
                            您是否同意我們向您寄送第三人(關係企業或企業客戶)的商品/服務資訊，若不同意並不影響使用我們的服務）
                        </p>
                        <div class="form-check-inline">
                            <div class="form-check form-check-small">
                                <input class="form-check-input" type="radio" name="agree" id="agree" checked />
                                <label class="form-check-label" for="agree"> 同意 </label>
                            </div>
                            <div class="form-check form-check-small">
                                <input class="form-check-input" type="radio" name="agree" id="disagree" />
                                <label class="form-check-label" for="disagree">
                                    不同意
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-to">
                    <button class="scroll-to-btn">
                        <p>請滑動頁面詳閱完整內文</p>
                        <div class="icon">
                            <span class="arrow"></span>
                            <span class="bar"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="footer-bar-content">
                <button class="btn btn-primary btn-large" id="submit" type="submit">
                    確認
                </button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

    <script type="text/javascript">
    $(".toggle").click(function() {
        $(".toggle-content").slideToggle(600);
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
            $(this).find("p").html("減少顯示內容");
        } else {
            $(this).find("p").html("顯示全部內容");
        }
    });

    $("#read")
        .bind("change", function() {
            if ($(this).prop("checked")) {
                $("#read-item").removeClass("error");
                $("#submit").removeClass("disabled", false);
            } else {
                $("#submit").addClass("disabled", true);
            }
        })
        .trigger("change");

    $("#submit").click(function() {
        if ($(this).hasClass("disabled")) {
            $("#read-item").addClass("error");
            $("#read-item")[0].scrollIntoView();
        } else {
            // window.location.href = "step1.html";
            trackEvent("privacy", "submit");
        }
    });

    $(".scroll-to-btn").click(function() {
        $("body")
            .stop()
            .animate({
                    scrollTop: $("body")[0].scrollHeight,
                },
                300
            );
    });
    </script>
</body>

</html>