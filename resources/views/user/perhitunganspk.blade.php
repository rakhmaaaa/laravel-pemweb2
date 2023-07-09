<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Penilaian</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('user/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('user.navigation')
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-3">Normalisasi</h2>
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Normalisasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nilai Rapot</th>
                                <th>Nilai Hadir</th>
                                <th>Ekstrakulikuler</th>
                                <th>Organisasi</th>
                                <th>Tingkah Laku</th>
                            </tr>
                            </thead>
                            <tbody id="list">
                                @foreach ($normalisasi as $n)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $n->siswa->nama }}</td>
                                <td>{{ $n->nilai_rapot }}</td>
                                <td>{{ $n->nilai_hadir }}</td>
                                <td>{{ $n->ekstrakulikuler }}</td>
                                <td>{{ $n->organisasi }}</td>
                                <td>{{ $n->tingkah_laku }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-3">Hasil</h2>
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Hasil</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
          
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nama</th>
                              <th>Hasil</th>
                              <th>Status</th>
                            </tr>
                            </thead>
                            <tbody id="list">
                              @foreach ($hasil as $h)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $h->siswa->nama }}</td>
                                <td>{{ $h->hasil }}</td>
                                <td>{{ $h->status }}</td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
              </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
