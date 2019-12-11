<div class="col-12">
    <div class="card card-body">
        <h4 class="card-title">@lang('scheme/home.task')</h4>
        <div class="message-box">
            <div class="message-widget">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body" style="background-color: #d8e8e9;">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="fas fa-list fa-lg"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">@if (empty($workbasket)){{0}}@else{{count($workbasket)}}@endif</h3>
                                        <h5 class="text-muted m-b-0">@lang('scheme/home.draft')</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body" style="background-color: #d8e8e9;">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-warning"><i class="far fa-hand-point-left fa-lg"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">0</h3>
                                        <h5 class="text-muted m-b-0">@lang('scheme/home.query')</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body" style="background-color: #d8e8e9;">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="far fa-clock fa-lg"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">0</h3>
                                        <h5 class="text-muted m-b-0">Pending</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Column -->
                </div>
                @yield('content-workbasket-scheme')
                @yield('content-workbasket-medical')
                @yield('content-workbasket-rtw')
            </div>
        </div>
    </div>
</div>