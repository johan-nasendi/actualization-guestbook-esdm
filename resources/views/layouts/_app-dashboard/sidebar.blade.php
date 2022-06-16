
 @if(Auth::user()->hasRole('admin'))
 <div class="h-100" data-simplebar>
     <!--- Sidemenu -->
     <div id="sidebar-menu">

         <ul id="side-menu">

             <li class="menu-title">Menu</li>

             <li>
                 <a href="{{route('dashboard')}}">
                     <i data-feather="home"></i>
                     <span> Dasbor </span>
                 </a>
             </li>

             <li>
                 <a href="">
                     <i data-feather="users"></i>
                     @php
                     $countguestbook = DB::table('guests')->count();
                     @endphp
                     <span class="badge badge-success badge-pill float-right">{{ $countguestbook }}</span>
                     <span> Buku Tamu </span>
                 </a>
             </li>

             <li>
                 <a href="#">
                     <i data-feather="users"></i>
                     @php
                     $countusers = DB::table('users')->count();
                     @endphp
                     <span class="badge badge-success badge-pill float-right">{{ $countusers }}</span>
                     <span> Petugas </span>
                 </a>
             </li>

         </ul>
     </div>
     <!-- End Sidebar -->

     <div class="clearfix"></div>

 </div>
} @elseif (Auth::user()->hasRole('member')){
<div class="h-100" data-simplebar>
   <p>Not Sidebar</p>
</div>
}
@endif
<!-- Sidebar -left -->





