<div class="panel-header" style="background-image: url(<?= ('assets/login_page/images/bg_login.jpg')?>); background-size:cover; background-position: center; height: 300px;">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">Hi, <strong><?= $this->session->userdata('nama_user')?></strong></h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistik <?= date("Y")?></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Registrasi Taman Kanak-Kanak <?= date("Y")?></div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="barCharttahun"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>