@include("layouts.header")
<div class="wrapper">
    <div class="page-wrapper">
        @include("layouts.sidemenu")
        <div class="content-wrapper">
            @include("layouts.navbar")
            <div class="content"> 
                @yield("content")
            </div>
        </div>
    </div>
</div>
@include("layouts.footer")
