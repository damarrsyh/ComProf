<div class="container-fluid ms-auto">
  <div class="row g-0" data-aos="fade-in" data-aos-duration="1000">
    @foreach ($summaries as $summary)
      <div class="col hov my-3 mx-3 text-center position-relative shadow rounded"
        style="background-color: rgba(233, 236, 239, 0.2);">
        {{-- <div class="custom-shape-divider-top-1714015617">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill">
            </path>
          </svg>
        </div> --}}
        <div class="my-5 p-3 hov-1">
          <div class="mb-2">
            <img src="/assets/media/img/{{ $summary->image }}" alt="" width="100px">
          </div>
          <hr class="divider">
          <h4 class="mb-2 fw-bold  text-white">{{ $summary->jumlah }}</h3>
            <h3 class="mb-2 fw-bold  text-white">{{ $summary->nama }}</h3>
        </div>
        {{-- <div class="custom-shape-divider-bottom-1714016193">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z"
              class="shape-fill"></path>
          </svg>
        </div> --}}
      </div>
    @endforeach
  </div>
  {{-- <div class="row g-0" data-aos="fade-in" data-aos-duration="1000">
    <div class="col hov my-3 mx-3 text-center position-relative">
      <button class="btn btn-primary mx-3 fw-bold" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Details</button>
    </div>
  </div> --}}
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Jumlah Pertumbuhan Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="monthlyChart">
        </div>
        <hr>
        <div id="annualChart">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@section('footer')
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('monthlyChart', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Pertumbuhan Anggota',
        align: 'left'
      },
      subtitle: {
        text: 'Bulanan',
        align: 'left'
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        crosshair: true,
        accessibility: {
          description: 'Month'
        }
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Jumlah'
        }
      },
      tooltip: {
        valueSuffix: ' (1000 MT)'
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [{
        name: 'Jumlah Anggota',
        data: [406292, 260000, 107000, 68300, 27500, 14500, 54393, 423034, 324324, 324324, 324325, 12324]
      }, ]
    });
    Highcharts.chart('annualChart', {

      title: {
        text: 'U.S Solar Employment Growth',
        align: 'left'
      },

      subtitle: {
        text: 'By Job Category. Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>.',
        align: 'left'
      },

      yAxis: {
        title: {
          text: 'Number of Employees'
        }
      },

      xAxis: {
        accessibility: {
          rangeDescription: 'Range: 2010 to 2020'
        }
      },

      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },

      plotOptions: {
        series: {
          label: {
            connectorAllowed: false
          },
          pointStart: 2010
        }
      },

      series: [{
        name: 'Installation & Developers',
        data: [
          43934, 48656, 65165, 81827, 112143, 142383,
          171533, 165174, 155157, 161454, 154610
        ]
      }, {
        name: 'Manufacturing',
        data: [
          24916, 37941, 29742, 29851, 32490, 30282,
          38121, 36885, 33726, 34243, 31050
        ]
      }, {
        name: 'Sales & Distribution',
        data: [
          11744, 30000, 16005, 19771, 20185, 24377,
          32147, 30912, 29243, 29213, 25663
        ]
      }, {
        name: 'Operations & Maintenance',
        data: [
          null, null, null, null, null, null, null,
          null, 11164, 11218, 10077
        ]
      }, {
        name: 'Other',
        data: [
          21908, 5548, 8105, 11248, 8989, 11816, 18274,
          17300, 13053, 11906, 10073
        ]
      }],

      responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            }
          }
        }]
      }

    });
  </script>
@endsection
