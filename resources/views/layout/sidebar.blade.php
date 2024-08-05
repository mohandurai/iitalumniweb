<nav class="sidebar">
  <div class="sidebar-header">
        <img src="{{ url('assets/images/iit-alumni.png') }}" width="160" height="40" alt="light version">
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item ">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a>
      </li>

      <li class="nav-item ">
        <a href="{{ url('/project') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">View Projects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#project" role="button" aria-expanded="" aria-controls="project">
          <i class="link-icon" data-feather="globe"></i>
          <span class="link-title">Giving Opportunity</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="project">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="#" class="nav-link">Projects</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Endownments</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Shaastra</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Give Every Month</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item (['apps/chat']) }}">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Why Give</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('/apps/calendar') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Ways to Give</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#donors" role="button" aria-expanded="" aria-controls="donors">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Impact</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="donors">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link (['ui-components/alerts']) }}">Whats our Donor Say</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('#') }}" class="nav-link (['ui-components/badges']) }}">Donors Report</a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Donors Wall</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">The Team</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Alma Matters</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">FAQs</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Get in Touch</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/email/inbox') }}" class="nav-link ">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/read') }}" class="nav-link ">Read</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link ">Compose</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item (['auth/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#auth" role="button" aria-expanded="" aria-controls="auth">
          <i class="link-icon" data-feather="unlock"></i>
          <span class="link-title">Authentication</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="#" class="nav-link (['auth/login']) }}">Login</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link (['auth/register']) }}">Register</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item ">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <!-- <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div> -->
    <!-- <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="https://www.nobleui.com/laravel/template/light/">
        <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
        <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">
      </a>
    </div> -->
  </div>
</nav>
