<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
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