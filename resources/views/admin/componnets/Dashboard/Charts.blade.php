@component('admin.master1')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$countNewOrder}}</h3>

                <p>سفارشات جدید</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>افزایش امتیاز</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$UserCount}}</h3>

                <p>کاربران ثبت شده</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>بازدید جدید</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-body">
                <div class="tab-content p-0">
                <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-line-chart mr-1"></i>
                  فروش
                </h3>
              </div>
                  <canvas id="myChart" width="400" height="150"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div><br>
            <div class="card">
              <div class="card-body">
                <div class="tab-content p-0">
                <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-line-chart mr-1"></i>
                    کاربران اضافه شده
                </h3>
              </div>
                  <canvas id="myChart2" width="400" height="150"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div><br>
            <div class="card">
              <div class="card-body">
                <div class="tab-content p-0">
                <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-line-chart mr-1"></i>
                     بازدید سایت
                </h3>
              </div>
                  <canvas id="myChart3" width="400" height="150"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div><br>
            <div class="card">
              <div class="card-body">
                <div class="tab-content p-0">
                <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-line-chart mr-1"></i>
                     در آمد
                </h3>
              </div>
                  <canvas id="myChart4" width="400" height="150"></canvas>
                </div>
              </div><!-- /.card-body -->
            </div><br>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- <section class="col-lg-5 connectedSortable"> -->

            <!-- Map card -->

            <!-- /.card -->

            <!-- solid sales graph -->

            <!-- /.card -->

            <!-- Calendar -->

            <!-- /.card -->
          <!-- </section> -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'نمودار خطی نمونه',
                    data: @json($data_sell),
                    borderColor: ' rgba(0, 123, 255, 1)',
                    borderWidth: 2,
                    fill: false
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
        <script>
        const ctxx = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctxx, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'نمودار خطی نمونه',
                    data: @json($data_user),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
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
            <script>
        const ctxxx = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctxxx, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'نمودار خطی نمونه',
                    data: @json($data),
                    borderColor: 'rgba(255, 99, 132, 1):',
                    borderWidth: 2,
                    fill: false
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
                <script>
        const ctxxxy = document.getElementById('myChart4').getContext('2d');
        const myChart4 = new Chart(ctxxxy, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'نمودار خطی نمونه',
                    data: @json($data_revenue),
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 2,
                    fill: false
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
  </div>
  <!-- labels: @json($labels),
                datasets: [{
                    label: 'نمودار خطی نمونه',
                    data: @json($data), -->
@endcomponent
