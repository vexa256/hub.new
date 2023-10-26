@include('header.header')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical"
    data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed"
    data-header-position="fixed">


    @include('sidebar.sidebar')
    <div class="body-wrapper">

        @include('header.top')


        <div class="container-fluid">

            <div class="row">

                @isset($Page)
                    @include($Page)
                @endisset
            </div>

        </div>
    </div>


</div>


@include('scripts.scripts')
@include('not.not')
@include('footer.footer')
