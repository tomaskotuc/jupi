<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container pt-3">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-2-1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">Neuvěřitelný zápas</h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-3-7.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">Matěj Šmíd není real člověk</h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-4-5.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">FE!N</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-4-8.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">Kočičky jsou cute</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-53.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">Tady lze vidět pan učitel :O</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-6-1.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center ">Sigma Olomouc</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <img src="matches/olo-mbl/sigma-boleslav-2425-6-11.jpg" alt="New York" class="d-block" style="width:100%">
                        </div>
                        <div class="col-6 bg-info">
                            <h1 class="text-center center justify-content-center">Hehehehe</h1>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>
<?= $this->endSection(); ?>