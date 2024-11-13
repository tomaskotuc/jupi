<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">


        <div class="carousel-indicators" style="bottom: -50px">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
        </div>


        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-6">
                        <img src="matches/olo-mbl/sigma-boleslav-2425-2-1.jpg" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="col-6 bg-danger">yap yap</div>
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                <div class="col-6">
                    <img src="matches/olo-mbl/sigma-boleslav-2425-3-7.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="col-6 bg-danger">yap yap</div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-4-5.jpg" alt="New York" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-4-8.jpg" alt="New York" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-53.jpg" alt="New York" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-6-1.jpg" alt="New York" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-6-11.jpg" alt="New York" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="matches/olo-mbl/sigma-boleslav-2425-6-29.jpg" alt="New York" class="d-block w-100">
        </div>

    </div>
    

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>



<?= $this->endSection(); ?>