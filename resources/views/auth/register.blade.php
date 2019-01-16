@extends('layouts.app')

@section('content2')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">註冊</div>
                    <hr class="colorgraph">
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            {{--class--}}
                            <div class="form-group{{ $errors->has('user_class') ? ' has-error' : '' }}">
                                <label for="user_class" class="col-md-4 control-label">班級</label>

                                <div class="col-md-6">
                                    <input id="user_class" type="text" class="form-control" name="user_class" value="{{ old('user_class') }}" required autofocus>

                                    @if ($errors->has('user_class'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_class') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--name--}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">姓名</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--phone--}}
                            <div class="form-group{{ $errors->has('user_phone') ? ' has-error' : '' }}">
                                <label for="user_phone" class="col-md-4 control-label">手機號碼</label>

                                <div class="col-md-6">
                                    <input id="user_phone" type="text" class="form-control" name="user_phone" value="{{ old('user_phone') }}" required autofocus>

                                    @if ($errors->has('user_phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--email--}}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--password--}}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">密碼</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--password again--}}
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">再次確認密碼</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>



                            <hr class="colorgraph">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        註冊
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection