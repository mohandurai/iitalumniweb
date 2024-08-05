@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet" />
  <style type="text/css">
   .image-container {
    max-width: 100%;
    margin: 0 auto;
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }
  </style>
@endpush

@section('content')

<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
            <img src="{{ url('/assets/images/proects-full.png') }}" style="width: 180vh; height:50vh;" alt="item-image">
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
          <h3>All Projects</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <img src="{{ url('/assets/images/all-proj1.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2L</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
                <img src="{{ url('/assets/images/all-proj2.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5L</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
                <img src="{{ url('/assets/images/all-proj3.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25L</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->



<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
                <img src="{{ url('/assets/images/all-proj4.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0.5L</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
                <img src="{{ url('/assets/images/all-proj5.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 950%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">5Cr</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
                <img src="{{ url('/assets/images/all-proj6.png') }}" style="width: 100vh; height:50vh;" alt="item-image">
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">6L</div>
                </div>
                <br>
                <div class="card">
                <button type="button" class="btn btn-primary">Donate Now</button>
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->




<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
        <img src="{{ url('/assets/images/complete-project.png') }}" style="width: 180vh; height:50vh;" alt="item-image">
        </div>
      </div>
    </div>
  </div>
</div>





<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><h3>Sign up for Newsletter</h3></label>
              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Email">
              <button type="submit" class="btn btn-primary mr-2">Subsribe Now</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="card-group">
    <div class="card"> <img src="{{ url('/assets/images/footer-last1.png') }}" style="width: 80vh; height:60vh;" alt="item-image"> </div>
    <div class="card"> <img src="{{ url('/assets/images/footer-last2.png') }}" style="width: 80vh; height:60vh;" alt="item-image"> </div>
    <div class="card"> <img src="{{ url('/assets/images/footer-last3.png') }}" style="width: 80vh; height:60vh;" alt="item-image"> </div>
  </div>





@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endpush
