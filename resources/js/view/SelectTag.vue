<template>
    <div>
        <div class="container-fluid">
            <div class="">
                <div class="position-relative">
                    <img class="img-fluid" width="100%" src="/img/bg-ab.jpg" alt="" />
                    <div class="
                      position-absolute
                      top-0
                      start-0
                      w-100
                      h-100
                      d-flex
                      align-items-center
                    " style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h5 class="
                              text-primary text-uppercase
                              mb-3
                              animated
                              slideInDown
                            "></h5>
                                    <h1 class="
                              display-3
                              text-white text-uppercase
                              animated
                              slideInDown
                            ">
                                        Vui lòng chọn những nội dung quan tâm
                                    </h1>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl mt-5 mb-2">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Kinh doanh và khởi nghiệp
                </h6>

            </div>
            <div class="container mt-5">
                <div class="row g-6 mb-4">
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Kinh doanh Online</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Startup</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Bất động sản</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Chứng khoán</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Dropshipping</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Quản trị doanh nghiệp</button>
                    </div>

                </div>
                <div class="row g-6 mb-4">
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Kế toán</button>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="container-xxl mt-5 mb-2">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Ngoại ngữ
                </h6>
            </div>
            <div class="container mt-5">
                <div class="row g-6 mb-4">
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Tiếng Anh</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink"  class="btn btn-outline-secondary" style="width: 90%">Tiếng Trung</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Tiếng Nhật</button>
                    </div>
                    <div class="col-lg-2 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Tiếng Hàn</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl  mt-5 mb-2">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Kĩ năng mềm
                </h6>
            </div>
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Đàm phán</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink"  class="btn btn-outline-secondary" style="width: 90%">Giao tiếp</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Thuyết trình</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">MC</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Kỹ năng quản lý</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Luyện giọng</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Quản trị nhân sự</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Kĩ năng lãnh đạo</button>
                    </div>
                    <div class="col-lg-2 mb-4 text-center">
                        <button type="button" @click="activeLink" class="btn btn-outline-secondary" style="width: 90%">Rèn luyện trí nhớ</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 row g-6 justify-content-center ">
            <div class="col-lg-2 text-center">
                <a href="/" type="button" class="btn btn-info" style="width: 100%">Xác nhận</a>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "SelectTag",

    setup() {


        return {

        };
    },
    methods: {
        activeLink(event) {
            if (event.target.className == "btn btn-outline-secondary") {
                event.target.className = "btn btn-secondary";
            }
            else {
                event.target.className = "btn btn-outline-secondary";
            }
        }
    },
};
</script>