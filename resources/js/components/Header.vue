<template>
    <nav
      class="
        navbar navbar-expand-lg
        bg-white
        navbar-light
        shadow
        sticky-top
        p-0
      "
    >
      <a
        href="index.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
        <h2 class="m-0 text-primary">
          <i class="fa fa-book me-3"></i>eLEARNING
        </h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <router-link class="nav-item nav-link"
                    :to="{ name: 'Home' }">Trang chủ</router-link>
          <a href="courses.html" class="nav-item nav-link">Khóa học của tôi</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Danh mục</a
            >
            <div class="dropdown-menu fade-down m-0">
              <a href="team.html" class="dropdown-item">Đầu tư</a>
              <a href="testimonial.html" class="dropdown-item">Ngoại ngữ</a>
              <a href="404.html" class="dropdown-item">Kĩ năng mềm</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
        </div>
        <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"
          >Đăng ký ngay<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
</template>
<script>

export default {
  name: 'Header',
  components: {
  },
  setup() {
    return {
      
    }
  },
}
</script>