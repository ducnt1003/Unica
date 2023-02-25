<template><!-- Section: Design Block -->
    <!-- Section: Design Block -->
        <!-- Jumbotron -->
        <div class="min-vh-100 d-flex px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container aligns-items-center">
                <div class="row gx-lg-5 align-items-center justify-items-center ">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            HỌC VIỆN ONLINE <br />
                            <span class="text-primary">eLearnings</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Chia sẻ kiến thức và kinh nghiệm thực tế tới hàng triệu người
                            <br>
                            HỌC MỌI LÚC, MỌI NƠI
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <h2 class="card-title px-md-5 text-center">Đăng nhập</h2>
                            <div class="card-body py-5 px-md-5">
                                <form>
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Email</label>
                                        <input type="email" class="form-control" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Mật khẩu</label>
                                        <input type="password" class="form-control" />
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-flex justify-content-center">
                                        <a href="/" type="submit" class="btn btn-primary btn-block mb-4">
                                        Sign in
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        Chưa có tài khoản ? <router-link to="/register"> Đăng ký</router-link>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
</template>