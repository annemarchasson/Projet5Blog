<footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">MON CV</h4>
                        <p class="pre-wrap lead mb-0"><a href="assets/img/CV.pdf">Télécharger mon cv</a></p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">MES RESEAUX</h4>
                            <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/chewbaccaccasse/">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/anne_eleveuse_de_cupcakes/?hl=fr">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a>
                            <a class="btn btn-outline-light btn-social mx-1" href="https://fr.linkedin.com/in/anne-marchasson-95093657">
                                <i class="fab fa-fw fa-linkedin-in"></i>
                            </a>
                    </div>
                    <!-- Footer Abdministration access-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">ADMINISTRATION</h4>
                        <?php
                        if ($this->session->get('pseudo')) {
                            ?>
                            <a href="../public/index.php?route=logout">Déconnexion</a>
                            <br>
                            <a href="../public/index.php?route=profile">Profil</a>
                            <br>
                            <?php if($this->session->get('role') ==='admin'){?>
                                <a href="../public/index.php?route=administration">Administration</a>
                            <?php } ?>


                            <?php
                        } else {
                            ?>
                            <a href="../public/index.php?route=register">Inscription</a>
                            /
                            <a href="../public/index.php?route=login">Connexion</a>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
        </footer>





<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
    <div class="container"><small class="pre-wrap">Copyright © Your Website 2020</small></div>
</section>