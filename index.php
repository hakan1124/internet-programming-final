<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> GEZGÖRÖĞREN </title>
    <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/commentStyle.css" rel="stylesheet" />
    <script src="js/scripts.js"> </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!"><img style="width:32px;height:32px;" src="assets/ins.png" /> GEZ GÖR ÖĞREN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ticket">Biletler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#iletisim">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2"> GEZGÖRÖĞREN AİLESİ İLE GEZİN </h1>
                        <p class=" text-white-50 mb-4">Türkiye'nin Eşsiz Kültürlerini Öğrenmek İçin Bizimle Gezin</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#ticket"> Önümüzdeki Etkinlikler </a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#yorumlarOneriler"> Geçmiş Etkinlikler </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">CEBİNİZ İÇİN UYGUN</h2>
                    <p> </p>
                    <a class="text-decoration-none" href="#ticket">
                        Uygun fiyatlarımız ile daha çok kültüre tanık olun!
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder"> ÇEŞİTLİLİĞİMİZ </h2>
                    <p> </p>
                    <a class="text-decoration-none" href="#!">
                        Farklı müzeler farklı rehberler ile size uygun olan turu bulun!
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                    <h2 class="h4 fw-bolder">DETAYLAR ÖNEMLİDİR</h2>
                    <p> </p>
                    <a class="text-decoration-none" href="#!">
                        Tecrübeli rehberlerimiz ile daha derine inin!
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="ticket" class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">HEMEN SATIN AL</h2>
                <p class="lead mb-0"><img src="assets/ins.png" style="width:32px;height:32px"> FARKIYLA</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">TEK BİLET</div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold"> 10 TL </span>
                                <span class="text-muted d-block"> Çini Müzesi Bileti </span>
                            </div>
                            <div class="d-grid"><a class="btn btn-outline-primary mt-5" id="liveToastBtn" href="#!"> ÖN SİPARİŞ VER </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold">
                                <i class="bi bi-star-fill text-warning"></i>
                                İki Bilet
                            </div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold"> 15 TL </span>
                                <span class="text-muted d-block"> Çini Müzesi Bileti </span>
                            </div>
                            <div class="d-grid"><a class="btn btn-primary mt-5" href="#!"> ÖN SİPARİŞ VER </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted"> AİLE BİLETİ(4) </div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold"> 30 TL </span>
                                <span class="text-muted d-block"> Çini Müzesi Bileti</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Sinema Bileti Hediyeli</strong>
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!"> ÖN SİPARİŞ VER </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">YORUMLARINIZ VE ÖNERİLERİNİZ BİZİM İÇİN ÖNEMLİ</h2>
                <p class="lead mb-0"></p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">BİZİMLE OLDUĞUNUZ İÇİN ÇOK MUTLUYUZ!</p>
                                    <div class="small text-muted"><a href="#yorumlarOneriler">YORUM YAPMAK İÇİN BURAYA TIKLA</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5" id="yorumlarOneriler">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">GEÇMİŞ ETKİNLİKLER</h2>
            </div>
            <div class="comment_block" style="margin-bottom: 100px;">
                <?php
                include 'baglan.php';
                $icerik = $db->prepare('
                        SELECT
                        *
                        FROM
                        icerikler
                        ORDER BY icerik_tarih DESC
                        ');
                $icerik->execute();
                $icerikgetir = $icerik->fetchAll(PDO::FETCH_ASSOC);
                foreach ($icerikgetir as $key => $value) {
                ?>
                    <div class="card sub d-inline-block m-2" style="width: 18rem;">
                        <img src="<?php echo $value['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a><?php echo substr($value['icerik_tarih'], 0, 10); ?></a></h5>
                            <p class="card-text"> DETAYLI BİLGİ </p>
                            <a class="btn btn-primary" href="<?php echo $value['seo']; ?>"><?php echo $value['konu']; ?></a>
                        </div>
                    </div>
                <?php }
                $icerik = $db->prepare("select * from icerikler where seo=:seo");
                $icerik->execute(array('seo' => $_GET['seo']));
                $icerikgetir = $icerik->fetch(PDO::FETCH_ASSOC);
                ?>
                <?php
                function yorum($id, $array, $alt)
                {
                    global $db;
                    if (!empty($id)) {
                        $comment = array(
                            "all" => array(),
                            "alt" => array()
                        );
                        $yorum = $db->prepare("SELECT * FROM yorumlar WHERE icerik_id=:icerik_id ORDER BY tarih DESC");
                        $yorum->execute(array("icerik_id" => $id));
                        while ($liste = $yorum->fetch(PDO::FETCH_ASSOC)) {
                            if ($liste["yorum_alt"] > 0) {
                                $comment["alt"][$liste["yorum_alt"]][$liste["id"]] = $liste;
                            } else {
                                $comment["all"][$liste["id"]] = $liste;
                            }
                        }
                        $for = $comment["all"];
                        $alt = $comment["alt"];
                    } else {
                        $for = $array;
                    } 
                    foreach ($for as $liste) {
                        if (isset($liste["id"])) {
                ?>
                            <li id="<?php echo $liste["id"]; ?>">
                                <div class="comment_body">
                                    <i class="fa fa-pencil"></i> <span class="user"><?php echo $liste["kullanici_ad"]; ?></span>
                                    <p><?php echo $liste["yorum"]; ?></p>
                                </div>
                                <div class="comment_toolbar">
                                    <div class="comment_details">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <?php echo date("H:i:s", strtotime($liste["tarih"])); ?></li>
                                            <li><i class="fa fa-calendar"></i> <?php echo date("Y-m-d", strtotime($liste["tarih"])) ?></li>
                                            <li><i class="fa fa-comment"></i><a href="?comment=<?php echo $liste["id"]; ?>">Yanıtla</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <?php if (isset($alt[$liste["id"]])) {
                                    echo "<ul class='user_comment ' style='width:80%;'>";
                                    yorum("", $alt[$liste["id"]], $alt);
                                    echo "</ul>";
                                } ?>
                            </li>
                <?php }
                    }
                }
                yorum($icerikgetir['id'], "", "");
                ?>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        </script>
        <script type="text/javascript">
            $("#ekle").on("click", function() {
                var yorum = $("#yorum").serialize();
                $.ajax({
                    url: "yorum.php",
                    type: "POST",
                    data: yorum,
                    dataType: "JSON",
                    success: function(argument) {
                        if (argument.yorum_alt == 0) {
                            $(".user_comment").html(argument.html + $(".user_comment").html());
                        } else {
                            $("#" + argument.yorum_alt).html($("#" + argument.yorum_alt).html() + "<ul class='user_comment ' style='width:80%;'>" + argument.html + "</ul>");
                        }
                        $("#kullanici_ad").val('');
                        $("#mail").val('');
                        $("#yorum_text").val('');
                        $("#yorum_alt").val('');
                    }
                });
            });
        </script>
        </div>
    </section>
    <footer class="py-5 bg-dark" id="iletisim">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; HAKAN ALTINAY 2023</p>
            <p class="mt-2 text-center text-white d-block"> +90 (xxx) xxx xx xx </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>