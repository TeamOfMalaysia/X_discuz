<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<div class="row">
    <ol class="breadcrumb" >
        <li><a href="#">设为首页</a></li>
        <li><a href="#">收藏本站</a></li>
        <li><a href="#">切换宽度</a></li>
    </ol>
    <div class="col-lg-6">
        <img src="{{ asset('image/common/logo.png') }}" alt="discuz"/>
    </div>
    <div class="col-lg-5">
        <form method="post" action="" class="form-horizontal">
                <div class="row">
                    <div class="form-group col-lg-9">
                        <label class="col-lg-4 control-label" for="inputName">
                            <select >
                                <option selected>用户名</option>
                                <option>Email</option>
                            </select>
                        </label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inputName"/>
                        </div>
                    </div>
                    <div class="checkbox col-lg-3">
                        <label>
                            <input type="checkbox" />
                            自动登陆
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-9">
                        <label class="col-lg-4 control-label" for="inputPassword">
                            密码
                        </label>
                        <div class="col-lg-8 ">
                            <input type="password" class="form-control" id="inputPassword"/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary ">登陆</button>
                    </div>
                </div>
        </form>

    </div>
    <div class="col-lg-1">

    </div>
</div>
