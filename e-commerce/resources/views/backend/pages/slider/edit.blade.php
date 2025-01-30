@extends('backend.mainpage.app')

@section('content')
<div class=row>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slider</h4>

            @if ($errors)
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
                @endforeach
            @endif

            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif

            @if (!empty($slider->id))
                @php
                    $routelink = route('panel.slider.update',$slider->id);
                @endphp
            @else
                @php
                    $routelink = route('panel.slider.store');
                @endphp
            @endif
            <form class="forms-sample" action="{{$routelink}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (!empty($slider->id))
                @method("PUT")
                @endif
                <div class="form-group">
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <img src="{{asset($slider->image ?? "")}}" width="150">
                    </div>
                  </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>

              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" value="{{$slider->title ?? ''}}"
                name="title" placeholder="Slider Title">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="4" name="description"
                placeholder="Slider description">{{$slider->description ?? ''}}</textarea>
              </div>

              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" value="{{$slider->link ?? ''}}" id="link" placeholder="Slider Link">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                @php
                    $status = $slider->status ?? "1";
                @endphp
                <select name="status" id="status" class="form-control">
                    <option value="0" {{$status == '0' ? 'selected' : ""}}>Passive</option>
                    <option value="1" {{$status == '1' ? 'selected' : ""}}>Active</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{route('panel.slider.index')}}" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
  @endsection
