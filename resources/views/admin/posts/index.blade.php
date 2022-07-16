@extends('admin.main')
@section('content')
@include('admin.alert')
<div class="card-header font-weight-bold">
  Dashboard
</div>
  
{{-- <div class="text-center">
  <a href="#" class="btn w-50" onclick="modal();" style="background-image: linear-gradient(to right, rgb(205, 240, 234), rgb(249, 249, 249), rgb(246, 198, 234), rgb(250, 244, 183));">
    Có bài viết mới, bạn có muốn gọi về?
  </a>
</div> --}}
<div class="modal fade" tabindex="-1" role="dialog" id="spinnerModal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <span class="fa fa-spinner fa-spin fa-3x w-100"></span>
    </div>
</div>
<div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th>Hình ảnh</th>
            <th>Title</th>
            <th>Trạng thái</th>
            <th colspan="2">Thao tác</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <form action="{{route('update.all')}}" method="post">
                @csrf
                <select name="status" class="form-control text-dark font-weight-bold" onchange="this.form.submit()">
                    <option class="bg-light" selected disabled>All</option>
                    <option class="bg-light" value="1">Publish all</option>
                    <option class="bg-light" style="background: #fff" value="0">Unpublish all</option>
                </select>
              </form> 
            </td>
            <td class="text-center">
              <form action="{{route('delete.all')}}" method="post">
                  @csrf
                  <button type="submit" class="btn text-light font-weight-bold" style="background: rgb(0, 0, 0)" onclick="return confirm('Do you want xóa all?')">Xóa</button>
                </form>
            </td>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $key => $value)
            
            <tr>
              <td><a href="{{route('show', $value->id)}}"><img src="{{ $value->image }}" width="200px" alt="{{ $value->image }}" srcset=""></a></td>
              <td class="text-secondary font-weight-bold"><a href="{{route('show', $value->id)}}">{{ $value->title }}</a></td>
              <td>
                <form action="{{route('update', $value->id)}}" method="post">
                  @csrf
                  <select style="background: {{ $value->publish == 1 ? 'rgb(152, 240, 215)' : 'rgb(246, 198, 234)' }}" name="status" id="myselect" class="form-control text-dark font-weight-bold" onchange="this.form.submit()">
                    @if ($value->publish == 1)
                      <option class="bg-light" selected disabled value="1">Publish</option>
                      <option class="bg-light" style="background: #fff" value="0">Unpublish</option>
                    @else
                      <option class="bg-light" selected disabled value="0">Unpublish</option>
                      <option class="bg-light" style="background: #fff" value="1">Publish</option>
                    @endif  
                  </select>
                </form>
              </td>
              <td class="text-center">
                <form action="{{route('delete', $value->id)}}" method="post">
                  @csrf
                  <button type="submit" class="btn text-dark font-weight-bold" style="background: rgb(247, 161, 177)" onclick="return confirm('Do you want xóa tin tức này?')">Xóa</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->  
    <div class="card-footer clearfix">
      <div class="pagination pagination-sm m-0 float-right">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
@endsection