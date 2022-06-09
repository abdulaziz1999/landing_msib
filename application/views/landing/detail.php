<main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-info opacity-6"></span>
          <div class="container">
              <div class="row justify-content-center mb-5">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">Course <b>Full Stack Web Developer</b>.</p>
                    <a href="javascript:;">
                      <img src="<?= base_url('assets/img/logos/'.$course->logo)?>" width="100" height="200" class="rounded-circle img-fluid border border-2 border-white">
                    </a>
                    <h5 class="text-white mb-2 mt-2"><?= $course->nm_materi?></h5>
                </div>
              </div>
              <a href="<?= base_url()?>" class="text-white"><i class="fas fa-arrow-left"></i>&nbsp;<b>Back to course</b></a>
          </div>
        </div>
        <div class="container">
          <div class="row mt-lg-n20 mt-md-n11 mt-n10 col-lg-12 justify-content-center">
          
            <div class="col-xl-12 col-lg-12 col-md-12 ">
              <div class="card z-index-0 mb-4">
                <div class="card-header text-center pt-4">
                  <h5>Task <?= $course->nm_materi?></h5>
                </div>
                <div class="card-body mb-5">
                <?php if($task->num_rows() >= 1):?>
                    <div class="accordion-1">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-10 mx-auto">
                          <div class="accordion" id="accordionRental">
                            <?php foreach($task->result() as $row):?>
                            <div class="accordion-item mb-3">
                              <h5 class="accordion-header" id="heading<?= $row->id_task?>">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $row->id_task?>" aria-expanded="false" aria-controls="collapse<?= $row->id_task?>">
                                  Tugas <?= $row->task?>
                                  <span class="btn bg-gradient-success btn-sm btn-round collapse-close pt-1 position-absolute end-0 me-5"><i class="fa fa-check"></i></span>
                                  <i class="collapse-close fa fa-chevron-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                  <i class="collapse-open fa fa-chevron-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                </button>
                              </h5>
                              <div id="collapse<?= $row->id_task?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $row->id_task?>" data-bs-parent="#accordionRental" style="">
                                <div class="accordion-body text-sm opacity-8">
                                  <div class="card">
                                    <div class="card-body p-3">
                                      <div class="row">
                                        <div class="col-lg-6 mb-lg-0 mb-4">
                                          <div class="d-flex flex-column h-100">
                                            <h5 class="font-weight-bolder">Landing Page 1</h5>
                                            <p class="mb-5"><?= $row->desc?></p>
                                            <a class="text-dark font-weight-bold ps-1 mb-0 icon-move-left mt-auto" target="_blank" href="<?= $row->link?>" >
                                              <button class="btn bg-gradient-success btn-sm">
                                                View 
                                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                              </button>
                                            </a>
                                          </div>
                                        </div>
                                        <div class="col-lg-6 me-auto ms-0 text-end">
                                          <div class="bg-gradient-primary border-radius-lg min-height-100">
                                            <img src="<?= base_url('assets/img/shapes/waves-white.svg')?>" class="position-absolute h-100 top-0 d-md-block d-none" alt="waves">
                                            <div class="position-relative">
                                              <img class="max-width-500 w-100 position-relative z-index-2 rounded" src="<?= base_url('assets/img/'.$row->foto)?>">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php endforeach;?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php else:?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-bell-55 text-white"></i></span>
                        <span class="alert-text text-white"><strong>Info!</strong> Task Not Entered!</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif;?>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </main>