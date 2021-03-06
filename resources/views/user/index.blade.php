@extends('layout.index')
@section('title','用户列表')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">用户列表</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">

      </div>
       
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <form action="{{url('/admin/user/index')}}" method="get">
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="dataTables-example_length">
                        <label>显示
                            <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
                              <option value="10"
                                @if(!empty($request['num']) && $request['num']==10)
                                selected
                                @endif 
                              >10</option>
                              <option value="25"
                                @if(!empty($request['num']) && $request['num']==25)
                                selected
                                @endif 
                              >25</option>
                              <option value="50"
                                @if(!empty($request['num']) && $request['num']==50)
                                selected
                                @endif
                              >50</option>
                              <option value="100"
                              @if(!empty($request['num']) && $request['num']==100)
                              selected
                              @endif
                              >100</option>
                            </select>
                        条
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="dataTables-example_filter" class="dataTables_filter">
                        <label>关键字:
                            <input
                                @if(!empty($request['keywords']))
                                  value="{{$request['keywords']}}" 
                                
                                @endif
                            name="keywords" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                        <button class="btn btn-primary">搜索</button>
                        </label>
                    </div>
                </div>
            </div>
            </from>
            <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th width="16"><input type="checkbox" id="check_box" onclick="selectall('id[]');"></th>
                <th width="30">ID</th>
                <th width="100">用户名</th>
                <th width="170">邮箱</th>
                <th width="100">手机</th>
                <th width="170">头像</th>
                <th width="100" align="center">操作</th>
                <th width="38">状态</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $k=>$v)
                <tr>
                    <td><input type="checkbox" name="id[]" value="{{$v->id}}"></td>
                    <!--<td><input type="text" name='listorder[{$item.id}]' value="{$item['listorder'] ? $item['listorder'] : $item['id']}" class="input_listorder"> </td>-->
                    <td class="sid">{{$v->id}}</td>
                    <td>{{$v->username}}</td>
                    <td>{{$v->email}}</td>
                    <td>{{$v->phone}}</td>
                    <td class="center"><img width="50px" src="{{$v->pic}}"></td>
                    <td class="center">
                           
                            <!-- <button class="btn btn-info btn-xs btn_update" href="{:U('edit',array('id'=>$item['id']))}"><i class="fa fa-paste"></i> 修改</button> -->
                            <a href="/admin/user/edit?id={{$v->id}}" class="btn btn-info btn-xs btn_update"><i class="fa fa-paste"></i> 修改</a>
                            <!-- <button class="btn btn-warning btn-xs btn_delete" href="javascript:ajaxDelete('{:U('delete',['id'=>$item['id']])}')"><i class="fa fa-times"></i> 删除</button> -->
                            <button class="btn btn-warning btn-xs btn_delete" type="button"><i class="fa fa-times"></i> 删除</button>
                    </td>
                    <td>{{$v->status}}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="9">
                    <div class="data-btn">
                        <label for="check_box" style="margin-right: 10px;">全选/取消</label>
                        <input type="button" class="btn btn-primary btn-sm" value="排序" onclick="javascript:ajaxListorder('{:U('listorder')}')">
                        <input type="button" class="btn btn-primary btn-sm" value="置顶" onclick="javascript:ajaxListorder('{:U('listorder')}')">
                        <input type="button" class="btn btn-primary btn-sm" value="推荐" onclick="javascript:ajaxListorder('{:U('listorder')}')">
                        <input type="button" class="btn btn-primary btn-sm" value="热点" onclick="javascript:ajaxListorder('{:U('listorder')}')">
                        <input type="button" class="btn btn-primary btn-sm" value="发布" onclick="javascript:ajaxDeal('id[]','{:U('toggle',['act'=>1])}')">
                        <input type="button" class="btn btn-primary btn-sm" name="dosubmit" value="草稿" onclick="javascript:ajaxDeal('id[]','{:U('toggle',['act'=>0])}')">
                        <input type="button" class="btn btn-primary btn-sm" name="dosubmit" value="删除" onclick="javascript:ajaxDeal('id[]','{:U('delete')}',

                        '确认执行该删除操作,删除后数据无法恢复?')">

                    </div>
                </td>
            </tr>
            </tfoot>
</table>
            <div class="row">
              <div class="col-sm-6">
                <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite"></div></div>
              <div class="col-sm-6">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                  {!!$users->appends($request)->render()!!}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
  <!-- /.col-lg-12 -->
</div>
@endsection
@section('myjs')
	<script type="text/javascript">
    //获取删除的按钮id 绑定单击事件
    $('.btn_delete').click(function(){
        //alert('4444444');//第一步看点击删除按钮时，能否弹出4444444的内容，出现了就代表绑定单击事件成功。
        //获取id
        var n=$(this);
        var id=$(this).parents('tr').find('.sid').html();

        //alert(id);
        //把id传到控制器方法里
        //ajax post请求会出现Token错误csrf保护问题 响应500,所以下边会报这样的错误信息。
        //在header中 添加下面标签
        //<meta name="csrf-token" content="{{csrf_token()}}">
        //设置ajax全局配置
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //发送ajax post请求
        $.post('{{url("/admin/user/delete")}}',{id:id},function(data){
            //console.log(data);
                if(data == 1){
                    n.parents('tr').remove();
                }

            });
        
    })
    </script>
@endsection