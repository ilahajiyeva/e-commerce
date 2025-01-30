@extends('backend.mainpage.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sliders Table</h4>
          <p class="card-description">
            <a href="{{ route('panel.slider.create') }}" class="btn btn-success">Create</a>
        </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (session()->get('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                @if (!empty($sliders) && $sliders->count() > 0)
                @foreach ($sliders as $slider)
                <tr class="item" item-id="{{$slider->id}}">
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->description ?? ""}}</td>
                    <td class="py-1">
                      <img src="{{asset($slider->image)}}" alt="image"/>
                    </td>
                    <td>{{$slider->link}}</td>
                    <td>

                        <div class="checkbox">
                            <label>
                              <input type="checkbox" class="status"
                               data-on="Active" data-off="Passive"
                               {{$slider->status == '1' ? 'checked' : ''}}
                               data-onstyle="success"
                               data-toggle="toggle">

                            </label>
                          </div>

                    </td>
                    <td class="d-flex">
                        <a href="{{route('panel.slider.edit', $slider->id)}}" class="btn btn-primary">
                            Edit</a>

                        {{--<form method="POST" action="{{route('panel.slider.delete', $slider->id)}}">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>--}}

                        <button type="button" class="deletebtn btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
                @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('customjs')
<script>
    $(document).on('change','.status', function(e) {

        id = $(this).closest('.item').attr('item-id');
        status = $(this).prop('checked');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url: "{{route('panel.slider.status')}}",
            data: {
                id:id,
                status:status
            },
            success: function (response) {
                if(response.status == 'true') {
                    alertify.success("Status is active");
                } else{
                    alertify.error("Status is passive");
                }
            }
        });
    });

    $(document).on('click','.deletebtn', function(e) {
        e.preventDefault

        var item = $(this).closest('.item');
        id = item.attr('item-id');

        alertify.confirm("Are you sure?","Are you sure to delete?",
            function(){

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'DELETE',
                    url: "{{route('panel.slider.delete')}}",
                    data: {
                        id:id,
                    },
                    success: function (response) {
                        if(response.error == false) {
                            item.remove();
                            alertify.success(response.message);
                        } else {
                            alertify.error("Something went wrong!");
                        }
                    }
                });
            },
            function(){
                alertify.error('Cancel');
            });
    });
</script>
@endsection
