<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Tabungan Siswa
                </a>
            </div>

            <ul class="nav">
            @if(!empty($halaman) && $halaman =='admin')
                 <li class="active"><a href="/admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                 @else
                <li> 
                    <a href="/admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endif
            @if(!empty($halaman) && $halaman =='nasabah')
                 <li class="active"><a href="/nasabah">
                        <i class="pe-7s-user"></i>
                        <p>Nasabah</p>
                    </a>
                </li>
                 @else
                <li> 
                    <a href="/nasabah">
                        <i class="pe-7s-user"></i>
                        <p>Nasabah</p>
                    </a>
                </li>
                @endif
            </ul>
      </div>
    </div>