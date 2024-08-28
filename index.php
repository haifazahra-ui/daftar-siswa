<?php 
include('isi/header.php');

$students = [
    [
        "nama" => "Ira",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 15,
         "keterangan" => "Hadir",
     ],
 
    [
        "nama" => "Haifazahra",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 17,
         "keterangan" => "Hadir",
     ],
    [
        "nama" => "M Gilang",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 16,
         "keterangan" => "Sakit",
     ],
    [
        "nama" => "Andra",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 16,
         "keterangan" => "Izin",
     ],
    [
        "nama" => "Fadli M",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 16,
         "keterangan" => "Alfa",
     ],
 
];

// echo count($students[0])
$number = 1;
?>

<div class="main-content">
<div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student):?>
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <td><?=$student['nama'] ?></td>
                                    <td><?=$student['kelas'] ?></td>
                                    <td> <?=$student['jurusan'] ?></td>
                                    <td> <?=$student['umur'] ?></td>
                                    <td> <?php
                                            if ($student['keterangan'] == 'Hadir') {
                                                echo '<span class="bg-success p-2 rounded text-light">Hadir</span>';
                                            } else if ($student['keterangan'] == 'Sakit') {
                                                echo'<span class="bg-primary p-2 rounded text-light">Sakit</span>';
                                            } else if ($student['keterangan'] == 'Alfa') {
                                                echo'<span class="bg-danger p-2 rounded text-light">Alfa</span>';
                                            } else {
                                                echo'<span class="bg-info p-2 rounded text-light">Izin</span>';
                                            }

                                            ?></td>
                                   
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <?php include('isi/footer.php')?>
        <!-- footer end -->
    

</div>
</div>
    <!-- main content end -->

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/apexcharts.js"></script>
    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/js/moment.min.js"></script>
    <script src="assets/vendor/js/daterangepicker.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>