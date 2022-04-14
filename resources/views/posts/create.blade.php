@extends('layouts.header')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="{{asset('assets/img/photos/bg2.webp')}}">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title">Create Job</h2>
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb justify-content-center">
                                <li><a href="index.blade.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Pages</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-12">
                    <div class="login-register-form-wrap">
                        <div class="login-register-form">
                            <div class="form-title">
                                <h4 class="title">Create Job</h4>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Recruitment Information</h4>
                                    </div>
                                    <div class="col-12">
                                        <label>Job Title<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="title" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Job description<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="content" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Salary<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-6">
                                        <label>Job Type<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" name="salary" type="text">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control" name="job_type" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Job level<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="job_level" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Quantity<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input class="form-control" name="quantity" type="number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Gender<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="gender_field" type="radio" value="male"> Male
                                            <input name="gender_field" type="radio" value="female"> Female
                                            <input name="gender_field" type="radio" value="all"> All
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Working experience<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="experience">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Posting date<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="posting_start">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Expired date<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="posting_end">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Business Categories<font style="color:red;">*</font></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="business_category_id" value=""> IT
                                            <input type="checkbox" name="business_category_id" value=""> Marketing
                                            <input type="checkbox" name="business_category_id" value=""> Retail
                                            <input type="checkbox" name="business_category_id" value=""> Banking
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="status_id" value="">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-theme">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Login Area Wrapper ==-->
</main>
@extends('layouts.footer')
