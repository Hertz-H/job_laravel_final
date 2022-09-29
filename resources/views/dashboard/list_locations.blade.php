@extends('layout.master')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-container">
        <div class="exper_info ">
            <h3 class="d-inline"> Locations </h3> <a class="add add_exp " href="/add_location"> add</a>

        </div>
        <table class="table table-image">
            <thead>
                <tr>
                    {{-- <th scope="col">Number</th> --}}

                    <th scope="col">Name</th>
                    {{-- <th scope="col">description</th> --}}
                    <th scope="col">status</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>


                        <td>{{ $item['name'] }}</td>
                        <td>
                            @if ($item['is_active'] == 1)
                                <span
                                    style="background-color: #e8fadf ;
                                           color: #71dd37;padding: 5px 8px; border-radius: 4px;
                                           padding-bottom: 9px;"
                                    class=" ">مفعل</span>
                            @else
                                <span class=" "
                                    style="color: #ea2b33;
                                       background-color: #ffeced;padding: 5px 8px; border-radius: 4px;
                                       padding-bottom: 9px;">موقف</span>
                            @endif
                        </td>
                        <td>
                            <a href="update_location/{{ $item['id'] }}" class=" edit btn "><i
                                    class="fas fa-edit"></i></a><a
                                href="activate_location/{{ $item['id'] }}/{{ $item['is_active'] }}"
                                class="btn  text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>




    </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    </body>

    </html>
@endsection