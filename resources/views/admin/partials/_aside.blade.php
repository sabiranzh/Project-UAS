<aside id="sidebar" class="sidebar">
    
<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="icon"></i>
          <p>Dashboard</p>
      </a>
  </li>
 
  <!-- Menambahkan menu baru -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/divisi') }}">
      <i class="bi bi-person"></i>
      <span>Divisi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pegawai') }}">
      <i class="bi bi-person"></i>
      <span>Pegawai</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/Jatahcuti') }}">
      <i class="bi bi-person"></i>
      <span>Jatah Cuti</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/Pengajuancuti') }}">
      <i class="bi bi-person"></i>
      <span>Pengajuan Cuti</span>
    </a>
  </li>
</ul>
</aside>