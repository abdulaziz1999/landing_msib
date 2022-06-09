<main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-info opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                        <h3 class="text-white mb-2 ">Form Task SIB</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-10 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Form Tugas NF</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('home/save')?>">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Course :</label>
                                    <select class="form-control" name="course_id" id="recipient-name" required >
                                        <option disabled selected>Pilih Course</option>
                                        <?php foreach($course as $row):?>
                                        <option value="<?= $row->id_course?>"><?= $row->nm_materi?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Task ke :</label>
                                    <input type="number" class="form-control" name="task" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Desc :</label>
                                    <input type="text" class="form-control" name="desc" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Link :</label>
                                    <input type="text" class="form-control" name="link" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Image :</label>
                                    <input type="text" class="form-control" name="foto" id="recipient-name">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="proses" value="daftar"
                                        class="btn bg-gradient-info w-100 my-4 mb-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>