<?php
include '../vendor/db.php';
if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];



    $query = "SELECT * FROM `services` WHERE id = '{$service_id}'";
    $select__service = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select__service);
    $id = $row['id'];
    $name = $row['name'];
    $main_img = $row['main_img'];
    $description = $row['description'];
    $list_image = $row['list_image'];
} else {
    header("Location: ../services.html ");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Shoots</title>

    <link rel="stylesheet" href="../styles/style.css" />
    <!--services styles--->
    <link rel="stylesheet" href="../styles/services.css">
    <!-- services php styles-->
    <link rel="stylesheet" href="./styles/services.css">


    <!--gallery styles--->
    <link rel="stylesheet" href="../styles/gallery.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>
    <div class="main_wrapper">
        <div class="main_container">
            <!----navigation container------>
            <!----navigation container------>
            <!----navigation container------>
            <div class="navigation__container">
                <div class="navigation__container_wrapper">
                    <!---photo logo--->
                    <div class="navigation__logo">
                        <a href="#">
                            <div class="navigation__img">
                                <img src="../styles/img/logo.png" alt="" />
                            </div>
                            <div class="navigation__text">Victoria Lipnitskaya
                            </div>
                            <p>Photographer</p>
                        </a>
                    </div>
                    <!------------>
                    <!---navigation navigation---->
                    <div class="navigation__nav_container">
                        <div class="navigation__elements">
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../index.html">Home</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../about.html">About</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../services.html">Services</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../gallery.html">Gallery</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="#">Feedback</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../blog.html">Blog</a>
                            </div>
                            <!--ссылка---->
                            <div class="navigation__element">
                                <a href="../contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <!-------->
                    <!--Navigation info-->
                    <div class="navigation__social_container">
                        <div class="navigation__social__wrapper">
                            <div class="navigation__social_icons">
                                <a href="#">
                                    <img src="../styles/img/insta.png" alt="" />
                                </a>
                                <a href="#">
                                    <img src="../styles/img/fb.png" alt="" />
                                </a>
                                <a href="#">
                                    <img src="../styles/img/yt.png" alt="" />
                                </a>
                                <a href="#">
                                    <img src="../styles/img/fb.png" alt="" />
                                </a>
                            </div>
                            <div class="navigation__social_desc">
                                <p>© 2022 Lipnitskaya by DAKER</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----content container----->
            <!----content container----->
            <!----content container----->
            <div class="content__container">
                <div class="content__wrapper">

                    <!---services php container--->
                    <div class="services__container">
                        <div class="services__page_name">
                            <a href="../services.html">SERVICES</a>
                            <h4><?php echo $name; ?></h4>
                        </div>

                        <div class="services__block_mainimg">
                            <img src="../styles/img/services/<?php echo $main_img; ?>" alt="">
                        </div>
                        <div class="services__block__descpription">
                            <p>
                                <?php echo $description; ?>
                            </p>
                        </div>
                        <div class="gallery__photos__wrapper">

                            <?php
                            $images = explode(",", $list_image);
                            foreach ($images as $img) {
                                $blick_img = $img;
                            ?>
                                <a href="../styles/img/content/<?php echo $img; ?>" data-fancybox="gallery" data-caption="Optional caption">
                                    <img src="../styles/img/content/<?php echo $img; ?>" alt="" srcset="">
                                </a>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                    <!--main page footer---->
                    <div class="footer__block">
                        <div class="footer__block__container">
                            <div class="footer__desc">

                                <h3>Victoria Lipnitskaya</h3>
                                <p>PHOTOGRAPHER</p>
                            </div>
                            <div class="footer__rights">
                                © 2022 Lipnitskaya by DAKER
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>