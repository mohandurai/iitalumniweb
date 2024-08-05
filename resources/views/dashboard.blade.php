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


<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      <div class="owl-carousel owl-theme owl-animate-css">
            <div class="item">
                <img src="{{ url('/assets/images/slider-1.png') }}" style="width: 150vh; height:60vh;" alt="item-image">
            </div>
            <div class="item">
            <img src="{{ url('/assets/images/slider-2.png') }}" style="width: 150vh; height:60vh;" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('/assets/images/slider-3.png') }}" style="width: 150vh; height:60vh;" alt="item-image">
          </div>
          <div class="item">
            <img src="{{ url('/assets/images/slider-4.png') }}" style="width: 150vh; height:60vh;" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
      <h3>Welcome to Joy of Giving,<br>the fundraising platform of IIT Madras</h3>
</br>
        <h6>IIT Madras is on a journey towards global distinction in engineering and science. We aim to place IITM among the 'Top 50' global education and research institutes. We are committed to provide the best possible education and research opportunities for students and to create technology-driven social impact.</h6>
</br>
        <h6>Everyone deserves access to quality education and research. Initiatives like scholarships to deserving students and funding cutting-edge research in engineering and science help enable an ‘IITM for All’. We also develop innovative technologies to solve the world's most pressing problems.</h6>
</br>
        <h6>Your support can help us achieve our goals. There are many ways to support – including making a gift in honor of a loved one. So do explore the site, visit ‘Alma matters’ and share your own stories too! Please do write to us, we look forward to hearing from you!</h6>
        </h5>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
      <h3>Featured Opportunities</h3>
        <center>
            <a href="{{ url('/project') }}">
                <button type="button" class="btn btn-primary">View All Projects</button>
            </a>
        </center>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
          <h3>IITM Alums Upgrade the Campus</h3>
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
                <img src="{{ url('/assets/images/column3-pic3.png') }}" style="width: 100%; height:100%;" alt="item-image">
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <img src="{{ url('/assets/images/column3-pic2.png') }}" style="width: 50vh; height:80vh;" alt="item-image">
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <img src="{{ url('/assets/images/column3-pic1.png') }}" style="width: 50vh; height:80vh;" alt="item-image">
          </div>
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
          <h3>What's New</h3>
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
                <img src="{{ url('/assets/images/whatnew-1.png') }}" style="width: 100%; height:100%;" alt="item-image">
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <img src="{{ url('/assets/images/whatnew-2.png') }}" style="width: 50vh; height:80vh;" alt="item-image">
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <img src="{{ url('/assets/images/whatnew-3.png') }}" style="width: 50vh; height:80vh;" alt="item-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Funds Collected for tye Year 2023</h6>
          <div class="dropdown mb-2">
            <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
            </div>
          </div>
        </div>
        <p class="text-muted mb-4">Funds collected activities related to services rendered in a given time period.</p>
        <div class="monthly-sales-chart-wrapper">
          <canvas id="monthly-sales-chart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Count Status</h6>
        </div>
        <!-- <div id="progressbar" class="mx-auto"></div> -->
        <img src="{{ url('/assets/images/pie-chart.png') }}" style="width: 100%; height:60%;" alt="item-image">
        <div class="row mt-4 mb-3">
          <div class="col-4 d-flex justify-content-end">
            <div>
              <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Projects <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
              <h5 class="font-weight-bold mb-0 text-right">1300+</h5>
            </div>
          </div>
          <div class="col-4">
            <div>
              <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Donors</label>
              <h5 class="font-weight-bold mb-0">11000+</h5>
            </div>
          </div>
          <div class="col-4">
            <div>
              <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Received</label>
              <h5 class="font-weight-bold mb-0">884+ Cr</h5>
            </div>
          </div>

        </div>
        <button class="btn btn-primary btn-block">Project Status</button>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
          <h3>A Message from the Dean</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column">
          <img src="{{ url('/assets/images/dean-mahesh.png') }}" style="width: 50vh; height:90vh;" alt="item-image">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-7 col-xl-8 stretch-card">
    <div class="card">
      <div class="card-body">

          <h3>Prof. Mahesh Panchagnula</h3>
          <h6>
          Department of Applied Mechanics,
          Dean, Alumni & Corporate Relations,
          IIT Madras.
          </h6>
          <div class="dropdown mb-2"></br>
          Dear Alumnus/ Alumna,<br>
As an institution, we have grown in the last 64 years, from being a fledgling, primarily undergraduate teaching institution being nurtured by German faculty members, to today, becoming India’s #1 ranked institution across various prestigious national rankings like the NIRF and the AIIRA, housing 10,000+ students 600+ faculty, with active involvement in world-class research. IIT Madras has emerged as a trailblazer in the country, setting new benchmarks through its continuing excellence and unswerving commitment to fostering innovation and entrepreneurship. This growth has happened due to the contributions of many stakeholders, faculty, students, But the most significant and striking contribution in the past decade has been through the involvement of alumni. Whether it is development of infrastructure, infusion of ideas into our eco-system or investment into student talent and absorption of student talent through our placement systems, Alumni have made a significant impact and continue to make a significant impact in the growth story of IIT Madras.<br><br>

There are two primary methods by which alumni have come to interface with us. They have contributed their time and several alumni have contributed their resources. Your time contribution is very precious to us, if you feel if that is the best way to become to involve with IIT Madras Please ping us, email us, we will be happy to talk to you and have you help us grow along our path. If you feel you can help us in specific verticals of our activities we have ways by which you can interface with our office, whether it is our office or our foundations across the world, We now have foundations in US, Canada, Germany and our growing alumni association is also an integral stakeholder in our growth story. We welcome you to be part of these alumni associations and come and help us in this path.<br><br>

I am an Alumnus of IIT Madras, 1992 B.Tech Graduate in Mechanical Engineering. From the time that I spent here on campus to now, the campus has changed significantly. It is greener, there are a lot more deer on campus, and there are several welcome additions across hostels and departments. Come and try out the bus that we have inside the campus now, and experience the ambience of your home once again. Please come visit us, we will be happy to host you, make your stay comfortable, gladly arrange visits to specific areas of the campus that you decided to visit and meet people, and we would be happy to have you be involved along the way. When I think of Alumni and IIT Madras, I want to say let us together grow. Let us together grow IIT Madras.
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
          <h3>Fundraising Efforts</h3>
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
        <img src="{{ url('/assets/images/fund-effort.png') }}" style="width: 200vh; height:60vh;" alt="item-image">
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
          <h3>A Message from CEO</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column">
          <img src="{{ url('/assets/images/Message-Kaviraj.png') }}" style="width: 50vh; height:60vh;" alt="item-image">
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-7 col-xl-8 stretch-card">
    <div class="card">
      <div class="card-body">

          <h3>Mr. Kaviraj Nair</h3>
          <h6>
          CEO, Office of Institutional Advancement,
          IIT Madras.
          </h6>
          <div class="dropdown mb-2"></br>
          Dear Alumnus/ Alumna,<br>
          The institute has been able to establish itself as India’s continuing leader in academic excellence, innovation and technological expertise, thanks to the growing support of our committed alumni and generous patrons, year after year. We are very proud of our large and vibrant alumni community, the extended family of IIT Madras. We will always remain grateful to you, our alumni, for your steadfast commitment in upholding the institute and for your keen interest in enabling its global aspirations, be it in fostering innovation and entrepreneurship on campus, cutting-edge research or giving wings to students’ dreams.<br><br>

          The Office of Institutional Advancement, was created with the intention of aiding in the development of the institute's enduring assets, ensuring the institute's sustainability and financial stability over the long term. As an office, we strive to continually create meaningful engagement in various ways, of the Institute’s 55,000+ alumni, now spread out across 82 different countries. We cultivate cooperation with alumni, companies, foundations, and other like-minded organizations. Our alumni are the most valuable asset we have, bar none. For the IIT Madras students, teachers, and staff, the continuing support of the alumni towards the Institute in the form of funding, resources, and mentorship, acts as a crucial support network. So do stay in touch, and let us take IIT Madras to greater heights, together!<br><br>
          Sincerely,
          Mr. Kaviraj Nair,
          CEO, Office of Institutional Advancement,
          IIT Madras.
          </div>
      </div>
   </div>
  </div>
</div> <!-- row -->






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
