@extends('backend.mainpage.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Slider Table</h4>
          <p class="card-description">
            <a class="btn btn-success" href="{{route('panel.slider.create')}}">Create</a>
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

                @if (!empty($sliders) && $sliders->count() > 0)
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->description ?? ""}}</td>
                    <td class="py-1">
                      <img src="{{asset($slider->image)}}" alt="image"/>
                    </td>
                    <td>{{$slider->link}}</td>
                    <td>
                        <label class="badge badge-{{$slider->status == '1' ? 'success' : 'danger'}}">
                            {{$slider->status == '1' ? 'Active' : 'Passive'}}
                        </label>
                    </td>
                    <td class="d-flex">
                        <a href="{{route('panel.slider.edit', $slider->id)}}" class="btn btn-primary">
                            Edit</a>

                        <form method="POST" action="{{route('panel.slider.delete', $slider->id)}}">
                            @method('DELETE')
                        `<button type="submit" class="btn btn-danger">Delete</button>
                        </form>
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
