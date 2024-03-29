@extends('layout.master')

@section('content')
    <div class="form-container  ">
        <h3> company</h3>
        <form class="row g-3  " action="{{ route('save_company') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-md-6">
                <label for="Title" class="form-label">name</label>
                <input type="text" class="form-control" id="Title"name="name" required value="{{ old('name') }}">
                @error('name')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror

            </div>
            <div class="col-md-6">
                <label for="Company" class="form-label">logo</label>
                <input type="file" class="form-control" id="logo" name="logo" required
                    value="{{ old('logo') }}">

                @error('logo')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="Company" class="form-label">Location</label>
                <select class="form-select" aria-label="Default select example" name="location_id">
                    @foreach ($locations as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach

                </select>
                @error('location')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="Company" class="form-label">Email</label>
                <input type="email" class="form-control" id="Company" name="email" required
                    value="{{ old('email') }}">
                @error('email')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror

            </div>
            <div class="col-md-5">
                <label for="Company" class="form-label">link</label>
                <input type="text" class="form-control" id="Company" name="link" required
                    value="{{ old('link') }}">
                @error('link')
                    <span style="color:red;font-size:12px"> {{ $message }} </span>
                @enderror

            </div>

            <div class="col-2">
                <button type="submit" class="btn save">Save</button>
            </div>
            <div class="col-2">
                <button type="submit" class="btn cancel">Cancel</button>
            </div>
        </form>
    </div>





    </div>









    </div>



    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    </body>
@endsection
