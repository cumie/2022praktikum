 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">SIGASING</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Admin</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="?page=home" class="nav-link active">
             <i class="nav-icon fas fa-home"></i>
             <p>
               Beranda 
             </p>
           </a>
         </li>
         <!-- navigasi proses penggajian  -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>Penggajian <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
               <a href="?page=penggajianrekap" class="nav-link">
                 <i class="far fa-circle nav-icone"></i>
                 <p>Rekap Gaji</p>
               </a>
             </li>
 
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icone">
                  <p>Riwayat Gaji</p>
                </i>
              </a>
            </li>
          </ul>
        </li>
         <!-- end navigasi penggajian -->
         <li class="nav-item  menu-open">
           <a href="#" class="nav-link">
             <i class="far fas fa-copy"></i>
             <p>Master Data
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="?page=lokasiread" class="nav-link">
                 <i class="far fa-circle nav-icone"></i>
                 <p>Lokasi</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="?page=jabatanread" class="nav-link">
                 <i class="far fa-circle nav-icone"></i>
                 <p>Jabatan</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="?page=bagianread" class="nav-link">
                 <i class="far fa-circle nav-icone"></i>
                 <p>Bagian</p>
               </a>
             </li> 
             <li class="nav-item">
               <a href="?page=karyawanread" class="nav-link">
                 <i class="far fa-circle nav-icone"></i>
                 <p>Karyawan</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
