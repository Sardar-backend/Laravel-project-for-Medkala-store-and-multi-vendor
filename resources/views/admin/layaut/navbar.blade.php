<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  حسام موسوی
                  <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">با من تماس بگیر لطفا...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  پیمان احمدی
                  <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">من پیامتو دریافت کردم</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  سارا وکیلی
                  <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
            <span class="float-left text-muted text-sm">3 دقیقه</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
            <span class="float-left text-muted text-sm">12 ساعت</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
            <span class="float-left text-muted text-sm">2 روز</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link toggle-dark-mode" href="#" onclick="toggleDarkMode()" title="تغییر حالت دارک/لایت">
            <i class="fa fa-moon-o mode-icon"></i>
            <span class="mode-text">حالت تاریک</span>
        </a>
    </li>

    <script>

        function toggleDarkMode() {
            let darkModeLink = document.querySelector('link[data-theme="dark"]');
            const modeIcon = document.querySelector('.mode-icon');
            const modeText = document.querySelector('.mode-text');
            const toggleButton = document.querySelector('.toggle-dark-mode'); // دکمه تغییر حالت

            if (darkModeLink) {
                // حذف حالت دارک مود
                darkModeLink.remove();
                localStorage.setItem('theme', 'light'); // ذخیره حالت روشن
                modeIcon.classList.replace('fa-sun-o', 'fa-moon-o'); // تغییر آیکون
                modeText.textContent = 'حالت تاریک'; // تغییر متن
                toggleButton.style.backgroundColor = '#000'; // تغییر رنگ دکمه به مشکی
                toggleButton.style.color = '#fff'; // تغییر رنگ متن به سفید
            } else {
                // اضافه کردن لینک دارک مود
                darkModeLink = document.createElement('link');
                darkModeLink.rel = 'stylesheet';
                darkModeLink.href = 'dist/css/dark.css'; // مسیر فایل دارک مود
                darkModeLink.setAttribute('data-theme', 'dark');
                document.head.appendChild(darkModeLink);

                localStorage.setItem('theme', 'dark'); // ذخیره حالت تاریک
                modeIcon.classList.replace('fa-moon-o', 'fa-sun-o'); // تغییر آیکون
                modeText.textContent = 'حالت روشن'; // تغییر متن
                toggleButton.style.backgroundColor = '#000'; // تغییر رنگ دکمه به سفید
                toggleButton.style.color = '#fff'; // تغییر رنگ متن به مشکی
            }
        }

        // اعمال حالت ذخیره شده هنگام بارگذاری صفحه
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            const toggleButton = document.querySelector('.toggle-dark-mode'); // دکمه تغییر حالت
            const modeIcon = document.querySelector('.mode-icon');
            const modeText = document.querySelector('.mode-text');

            if (savedTheme === 'dark') {
                const darkModeLink = document.createElement('link');
                darkModeLink.rel = 'stylesheet';
                darkModeLink.href = 'dist/css/dark.css'; // مسیر فایل دارک مود
                darkModeLink.setAttribute('data-theme', 'dark');
                document.head.appendChild(darkModeLink);

                modeIcon.classList.replace('fa-moon-o', 'fa-sun-o');
                modeText.textContent = 'حالت روشن';
                toggleButton.style.backgroundColor = '#000'; // رنگ دکمه در حالت تاریک
                toggleButton.style.color = '#fff';
            } else {
                toggleButton.style.backgroundColor = '#000'; // رنگ دکمه در حالت روشن
                toggleButton.style.color = '#fff';
            }
        });

    </script>
    </ul>
  </nav>
  <!-- /.navbar -->
