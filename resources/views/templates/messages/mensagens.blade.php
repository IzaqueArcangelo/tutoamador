<style>
    .msg {
        background: #fefefe;
        color: #666666;
        font-weight: bold;
        font-size: small;
        padding: 12px;
        padding-left: 16px;
        border-top: solid 3px #CCCCCC;
        border-radius: 5px;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
        -moz-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
        box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
    }
    .msg-clear {
        border-color: #fefefe;
        -webkit-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
        -moz-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
        box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
    }
    .msg-info {
        border-color: #b8dbf2;
    }
    .msg-success {
        border-color: #cef2b8;
    }
    .msg-warning {
        border-color: rgba(255,165,0,.5);
    }
    .msg-danger {
        border-color: #ec8282;
    }
    .msg-primary {
        border-color: #9ca6f1;
    }
    .msg-magick {
        border-color: #e0b8f2;
    }
    .msg-info-text {
        color: #39b3d7;
    }
    .msg-success-text {
        color: #80d651;
    }
    .msg-warning-text {
        color: #db9e34;
    }
    .msg-danger-text {
        color: #c9302c;
    }
    .msg-primary-text {
        color: rgba(47,106,215,.9);
    }
    .msg-magick-text {
        color: #bb39d7;
    }
</style>
<div class="container" style="padding:50px;">
   {{-- <div class="row">
        <div class="col-md-4">
            <div class="msg msg-info"> <span class="glyphicon glyphicon-info-sign"></span> msg msg-info</div>
        </div>
        <div class="col-md-4">
            <div class="msg msg-success msg-success-text"> <span class="glyphicon glyphicon glyphicon-ok"></span> msg msg-success msg-success-text</div>
        </div>
        <div class="col-md-4">
            <div class="msg msg-warning msg-danger-text"> <span class="glyphicon glyphicon-exclamation-sign"></span> msg msg-warning msg-danger-text</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="msg msg-danger"> <span class="glyphicon glyphicon glyphicon-remove"></span> msg msg-danger</div>
        </div>
        <div class="col-md-4">
            <div class="msg msg-primary"> msg msg-primary</div>
        </div>
        <div class="col-md-4">
            <div class="msg msg-clear"> msg msg-clear</div>
        </div>
    </div>
    <div class="msg msg-magick"> msg msg-magick</div>
    <div class="msg"> msg</div>--}}

    <div class="row">

        @if(Session::has('status'))
            <div class="col-md-4">
                <div class="msg msg-success msg-success-text"> <span class="glyphicon glyphicon glyphicon-ok"></span> {{ Session::get('status') }} </div>
            </div>
        @endif

        @if(Session::has('erro'))
            <div class="col-md-4">
                    <div class="msg msg-danger"> <span class="glyphicon glyphicon glyphicon-remove"></span> {{ Session::get('erro') }}</div>
           </div>
        @endif


    </div>
</div>