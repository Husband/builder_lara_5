<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <span id="logo" style="margin-top: 10px;">
           @if($skin && $skin != "smart-style-0")
                <img src="{{asset('/packages/vis/builder/img/logo-w.png')}}" alt="VIS-A-VIS">
           @else
                <img src="{{asset('/packages/vis/builder/img/logo.png')}}" alt="VIS-A-VIS">
           @endif
        </span>

    </div>

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="/admin/logout" title="{{__cms("Выход")}}" data-action="userLogout" ><i class="fa fa-sign-out"></i></a> </span>
        </div>

        <div id="fullscreen" class="btn-header transparent pull-right">
                <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        @include('admin::partials.change_lang')

    </div>
</header>