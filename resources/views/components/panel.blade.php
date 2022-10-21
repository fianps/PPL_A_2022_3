<div class="main-panel">
    <div class="content-wrapper">
        @if (Route::currentRouteName() == 'dashboard')
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{asset('assets/images/dashboard/Group126@2x.png')}}"
                                        class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">PIYE KABARE LUR</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                    <span>
                                        <a href="https://www.bootstrapdash.com/product/corona-admin-template/"
                                            target="_blank"
                                            class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('main_content')
    </div>
</div>