      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Dashboard</li>
          <li class=""><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          <li class=""><a class="nav-link" href="{{ url('perhitungan') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Perhitungan</span></a></li>
          <li class=""><a class="nav-link" href="{{ url('alternatif') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Data Siswa</span></a></li>
          <li class=""><a class="nav-link" href="{{ url('kelas') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Data Kelas</span></a></li>
          <li class=""><a class="nav-link" href="{{ url('kriteria') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Kriteria</span></a></li>          
          <li class=""><a class="nav-link" href="{{ url('datanilai') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Data Nilai</span></a></li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Logout</li>
          <li class=""><a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Logout</span></a></li>
         </ul>
      </nav>