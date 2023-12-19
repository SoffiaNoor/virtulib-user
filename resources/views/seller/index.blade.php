@extends('layouts/master')
@section('content')
<div class="container-fluid px-3 pt-1">
    <div class="row">
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-warning border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Total Buyer</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Buyer::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/murid" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        See More...
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-warning border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Total Product</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Products::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/dosen" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        See More...
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-warning border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Total Order</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Order::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/dosen" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        See More...
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-full p-0">
                <div class="py-2 px-4" style="background-color:white!important;color:white">
                    <h6 class="text-black font-weight-bolder">Total Purchase Products</h6>
                    <canvas id="topSalesChart" width="50" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card card-carousel overflow-hidden h-full p-0">
                <div class="py-2 px-4" style="background-color:#ad7c35!important;color:white">
                    <h6 class="text-white font-weight-bolder">Diagram Pemesanan Mata Pelajaran</h6>
                    <canvas id="subjectSalesChart" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')
<script>
    const chartData = @json($chartData);
    const productNames = Object.keys(chartData);
    const data = Object.values(chartData);

    const ctx = document.getElementById('topSalesChart').getContext('2d');
    const topSalesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: productNames,
            datasets: [{
                label: 'Total Purchase',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection