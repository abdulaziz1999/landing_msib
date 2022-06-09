<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg mb-7"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-info opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">Course <b>Full Stack Web Developer</b>.</p>
                    <a href="javascript:;">
                        <img src="./assets/img/logos/nf.png" width="100" height="200"
                            class="rounded img-fluid border border-2 border-white bg-white">
                    </a>
                    <a href="javascript:;">
                        <img src="./assets/img/logos/km.png" width="250" height="300"
                            class="rounded img-fluid border border-2 border-white bg-white">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n20 mt-md-n11 mt-n10 col-lg-12 justify-content-center">
            <!-- WEB -->
            
            <?php foreach($course as $row):?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="<?= base_url('home/detail/'.$row->id_course)?>">
                    <div class="card z-index-0 mb-4">
                        <div class="card-header text-center pt-4">
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-6 col-lg-6 order-lg-3">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <img src="assets/img/logos/<?= $row->logo?>"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="text-center"><b><?= $row->nm_materi?></b></h4>
                            <?php $count = $this->m_landing->countCourse($row->id_course,1,1);
                                if($count >= 1):
                            ?>
                                <span class="badge bg-gradient-success"><?= $count?> task</span>
                            <?php else:?>
                                <span class="badge bg-gradient-danger"><?= $count?> task</span>    
                            <?php endif;?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach;?>
        </div>

        <div class="text-center mt-6">
            <h3>Abdul Aziz</h3>
            <p>"Be a Beneficial Person for Others".</p>
        </div>
        <div class="social-links text-center mt-4 ">
            <a href="https://twitter.com/AbdulAz65072470" target="_blank" type="button"
                class="btn btn-twitter btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
            </a>
            <a href="https://www.facebook.com/aziz.revolusion" target="_blank" type="button"
                class="btn btn-facebook btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </a>
            <a href="https://instagram.com/azizakbarpermana" target="_blank" type="button"
                class="btn btn-youtube btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
            </a>
            <a href="https://aziz212.medium.com" target="_blank" type="button"
                class="btn btn-github btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-medium"></i></span>
            </a>
            <a href="https://www.linkedin.com/in/abdul-aziz-9a64711a7" target="_blank" type="button"
                class="btn btn-linkedin btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-linkedin"></i></span>
            </a>
        </div>

    </div>
</main>