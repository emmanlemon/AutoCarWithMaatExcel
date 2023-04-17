@extends('extension.app')
<style>
    body{
        background-image:url('https://images.hdqwalls.com/wallpapers/cyberpunk-car-4k-me.jpg');
        background-repeat:no-repeat;
        background-size: cover;
        min-height: 50vh;
    }
    .container{
        min-height: 50vh;
        opacity: .9;
        box-shadow: 1px 1px 1px black;
        border-radius: 10px;
    }
</style>
<body>
    <div class="container mt-5 p-2 bg-white width: 90%">
        <div class="box-controller">
            <h2><i class="fa fa-car" aria-hidden="true"></i>
                Car : 
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Add Cars +
                </button>
                <a href="{{ route('excel.export') }}" class="btn btn-success" onclick="exportCar()">Export Excel</a>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#importExcelModal">
                    Import Excel
                </button>
            </h2>
            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            {{-- <div class="alert alert-success" id="message"></div> --}}
            <table class="table">
                <thead class="thead-dark bg-black-400">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Code</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Car Model</th>
                    <th scope="col">Car Price</th>
                    <th scope="col">Monthly</th>
                    <th scope="col">Year Release</th>
                    <th scope="col">Year Coverage</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(empty($cars))
                    <tr>
                        <td>No Data Yet.</td>
                    </tr>
                    @else
                    @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $car->car_code }}</td>
                        <td>{{ $car->car_name }}</td>
                        <td>{{ $car->car_type }}</td>
                        <td>{{ $car->car_model }}</td>
                        <td>{{ $car->car_prize }}</td>
                        <td>{{ $car->monthly}}</td>
                        <td>{{ date('F j, Y, g:i a', strtotime($car->year_release)) }}</td>
                        <td>{{ date('F j, Y, g:i a', strtotime($car->year_coverage)) }} </td>
                        <td>{{ date('F j, Y, g:i a', strtotime($car->created_at)) }}</td>
                        <td>
                            <button class="btn btn-success">
                                <i class='bx bx-edit-alt'></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class='bx bxs-trash' ></i>
                            </button>
                        </td>
                        {{-- , {{ \Carbon\Carbon::parse($car->created_at)->diffForHumans() }} --}}
                    </tr>
                @endforeach
                    @endif
                </tbody>
              </table>
        </div>
    </div>
    <script>
        function exportCar(){   document.getElementById("message").innerText = "Excel File Downloaded Successfully"; }
    </script>
</body>
</html>

@extends('cars.carModal.create')
@section('createCar')
@endsection

@extends('cars.carModal.import')
@section('importCar')
@endsection