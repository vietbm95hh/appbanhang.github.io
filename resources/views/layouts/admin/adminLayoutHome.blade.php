@include('admin.comm.header',['name' => 'Home', 'title' => 'Trang chủ', 'content'=> $title ] )
@yield('css')
            <div class="content">
                
                <div class="container-fluid">
                    <div class="row">               
                        @yield('content')
                    </div>               
                </div>
            </div>
@include('admin.comm.footer')