@extends('layout.index')
@section('title','用户修改')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">用户修改</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <!-- 显示闪存中的错误信息 -->
                        <!--@if(session('error'))
	                    	<div class="alert alert-danger alert-dismissable">
	                        	<button type="button" class="close" aria-hidden="true" data-dismiss="alert"></button>
	                         {{session('error')}}
	                         	
	                        </div>
	                        @endif-->
	                    <!-- 用手册内置的 -->
	                    @if(count($errors)>0)
	                    <div class="alert alert-danger">
	                    	<ul>
	                    		@foreach($errors->all() as $error)
	                    			<li>{{$error}}</li>
	                    		@endforeach
	                    	</ul>
	                    </div>
	                    @endif 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/admin/user/update')}}" method="post" enctype="multipart/form-data">
                                        
                                        <input type="hidden" name="id" value="{{$user->id}}" class="form-control">
                                      
                                        <div class="form-group">
                                            <label>用户名</label>
                                            <input type="text" name="username" value="{{$user->username}}" class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>邮箱</label>
                                            <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>手机号</label>
                                            <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>头像</label>
                                            <input type="file" name="pic">
                                        </div>
                                         <!-- "pic" => "/uploads/b0a250a69be1682691b306a38e79c161.jpg"value="{{old('pic')}}"value="{{$user->pic}}" -->
                                        {{csrf_field()}}
                                        <button class="btn btn-success" type="submit">修改</button>
                                        <button class="btn btn-danger" type="reset">重置</button>
                                        <!--<div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input placeholder="Enter text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea rows="3" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input type="radio" checked="" value="option1" id="optionsRadiosInline1" name="optionsRadiosInline">1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="option2" id="optionsRadiosInline2" name="optionsRadiosInline">2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="option3" id="optionsRadiosInline3" name="optionsRadiosInline">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select class="form-control" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-default" type="submit">Submit Button</button>
                                        <button class="btn btn-default" type="reset">Reset Button</button>-->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!--<div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled="">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input type="text" disabled="" placeholder="Disabled input" id="disabledInput" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select class="form-control" id="disabledSelect">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label for="inputSuccess" class="control-label">Input with success</label>
                                            <input type="text" id="inputSuccess" class="form-control">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label for="inputWarning" class="control-label">Input with warning</label>
                                            <input type="text" id="inputWarning" class="form-control">
                                        </div>
                                        <div class="form-group has-error">
                                            <label for="inputError" class="control-label">Input with error</label>
                                            <input type="text" id="inputError" class="form-control">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" placeholder="Username" class="form-control">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" placeholder="Font Awesome Icon" class="form-control">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>-->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>	
@endsection