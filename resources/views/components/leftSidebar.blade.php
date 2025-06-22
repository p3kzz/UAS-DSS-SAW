 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title" data-key="t-menu">Menu</li>

                 <li>
                     <a href="{{ route('dashboard') }}">
                         <i data-feather="home"></i>
                         <span data-key="t-dashboard">Dashboard</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('kriteria') }}">
                         <i data-feather="file-text"></i>
                         <span data-key="t-pages">Kriteria</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('kategori') }}">
                         <i data-feather="briefcase"></i>
                         <span data-key="t-components">Kategori</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('index_saw') }}">
                         <i data-feather="sliders"></i>
                         <span data-key="t-tables">SAW</span>
                     </a>
                 </li>
             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
