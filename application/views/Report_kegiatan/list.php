<div class="row btnprint">
    <div class="col-md-12 mb-3" align="right">
        <button class="btn btn-primary btn-sm" onclick="printkegiatan()"><i class="fa fa-file-pdf"></i></button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <center><strong><h3>Report Kegiatan
                            <?php if($bulan != 0):?>
                                <br><?php if($bulan == '01'):?>
                                        Januari
                                    <?php elseif($bulan == '02'):?>
                                        Februari
                                    <?php elseif($bulan == '03'):?>
                                        Maret
                                    <?php elseif($bulan == '04'):?>
                                        April
                                    <?php elseif($bulan == '05'):?>
                                        Mei
                                    <?php elseif($bulan == '06'):?>
                                        Juni
                                    <?php elseif($bulan == '07'):?>
                                        Juli
                                    <?php elseif($bulan == '08'):?>
                                        Agustus
                                    <?php elseif($bulan == '09'):?>
                                        September
                                    <?php elseif($bulan == '10'):?>
                                        Oktober
                                    <?php elseif($bulan == '11'):?>
                                        November
                                    <?php else:?>
                                        Desember
                                    <?php endif?>
                            <?php endif;?><?php if($tahun != 0):?> <?= $tahun?><?php endif;?></h3></strong></h3></strong></center>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabel_kegiatan">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Nama Kegiatan</center></th>
                        <th><center>Proker</center></th>
                        <th><center>Lokasi</center></th>
                        <th><center>Tanggal Mulai</center></th>
                        <th><center>Tanggal Selesai</center></th>
                        <th><center>Pemasukan</center></th>
                        <th><center>Pengeluaran</center></th>
                        <th><center>Keterangan</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($kegiatan as $row):?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $row->nama_kegiatan?></td>
                            <td><?= $row->nama_proker?></td>
                            <td><?= $row->lokasi_kegiatan?></td>
                            <td><?= date("d M Y",strtotime($row->tanggal_mulai_kegiatan))?></td>
                            <td><?= date("d M Y",strtotime($row->tanggal_selesai_kegiatan))?></td>
                            <td>Rp <?=number_format($row->pemasukan,2,',','.');?></td>
                            <td>Rp <?=number_format($row->pengeluaran,2,',','.');?></td>
                            <td><center>
                                <?php if($row->pemasukan == $row->pengeluaran):?>
                                    <span class="badge badge-success">Sesuai</span>
                                <?php elseif($row->pemasukan > $row->pengeluaran):?>
                                    <span class="badge badge-success">Surplus</span>
                                <?php else:?>
                                    <span class="badge badge-danger">Defisit</span>
                                <?php endif;?>
                                </center>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>