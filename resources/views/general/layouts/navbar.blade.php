<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                aria-expanded="false"><span class="hide-menu">Mark Jeckson</span></a>
                <ul aria-expanded="false" class="collapse">
                  <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                  <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                  <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                  <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- PERSONAL</li>

            <!-- ============================== MOEI ========================= //  --> 

            @if (checkRole(['MOEI']))
            <li><a class="fcolor" href="/workbasket"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li><a class="fcolor" aria-expanded="false"><span class="hide-menu"><i class="ti-layout-grid2"></i>@lang('Medical Services')</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{Route('newcase')}}"><i class="ti-layout-grid2"></i>@lang('New Case') </a></li>
                <li><a href="{{Route('reportstatus')}}"><i class="ti-layout-grid2"></i>@lang('Report Status') </a></li>
                <li><a href="{{Route('moeiAbpppCampaign')}}"><i class="ti-layout-grid2"></i>@lang('Campaign') </a></li>
             <li></li>
             
          
            </ul>
            </li>
          <li></li>
            @endif

            <!-- ============================== ABPPP ========================= // AFIQAH -->             

            @if (checkRole(['ABPPP']))
            <li><a class="fcolor" href="/workbasket"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li> <a class="fcolor" aria-expanded="false"><span class="hide-menu"><i class="ti-layout-grid2"></i>@lang('Medical Services')</span></a>
              <ul aria-expanded="false" class="collapse">
                <li><a class="fcolor" href="{{Route('blank')}}">@lang('Appointment')</a></li>
                <li><a class="fcolor" href="{{Route('committee')}}">@lang('Comittee')</a></li>
              </ul>
            </li>
            @endif

            <!-- ============================== PK, SCO ========================= // AFIQAH --> 

            @if (checkRole(['SCO','PKI']))
            <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
            <li><a class="fcolor" href="{{route('workbasket')}}"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li><a class="fcolor" href="{{Route('noticetype')}}"><i class="ti-layout-grid2"></i>@lang('navbar.register') </a></li>
            <li><a class="fcolor" href="#"><i class="ti-upload"></i>@lang('navbar.upload_document') </a></li>
            @endif

            <!-- ========================== SUPERADMIN, ADMIN ========================= // FATIN --> 

            @if (checkRole(['SADM','ADM']))
                <li>
                  <a class="fcolor" href="/Audittrail"><i class="icon-home"></i>@lang('navbar.home')
                  </a>
                </li>
                <li> 
                  <a class="fcolor"><i class="icon-user"></i>@lang('navbar.admin')                   
                  </a>
                  <ul aria-expanded="false">
                    <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.manage_branch')</span></a>
                      <ul aria-expanded="false" class="collapse">
                        <li><a class="fcolor" href="{{Route('branch')}}">@lang('navbar.create_branch')</a></li>
                        <li><a class="fcolor" href="{{Route('branch_management')}}">@lang('navbar.management')</a></li>                        
                      </ul> 
                    </li>
                    <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.manage_user_id')</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a class="fcolor" href="{{Route('regis')}}">@lang('navbar.create_staff')</a></li>
                          <li><a class="fcolor" href="{{Route('user_management')}}">@lang('navbar.management')</a></li>                        
                      </ul> 
                    </li>
                    <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.manage_ref_code')</span></a>
                      <ul aria-expanded="false" class="collapse">
                        <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.parameter')</span></a>
                          <ul aria-expanded="false" class="collapse">
                            <li><a class="fcolor" href="{{Route('parameter')}}">@lang('navbar.create_parameter')</a></li>
                            <li><a class="fcolor" href="{{Route('parameter_management')}}">@lang('navbar.management')</a></li>                      
                          </ul> 
                        </li>
                        <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.role')</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a class="fcolor" href="{{Route('role')}}">@lang('navbar.create_role')</a></li>
                              <li><a class="fcolor" href="{{Route('role_management')}}">@lang('navbar.management')</a></li>                      
                          </ul> 
                        </li>
                        <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.medical_board_accessor')</span></a>
                          <ul aria-expanded="false" class="collapse">
                            <li><a class="fcolor" href="{{Route('hospital')}}">@lang('navbar.create_hospital')</a></li>
                            <li><a class="fcolor" href="{{Route('hospital_management')}}">@lang('navbar.manage_hospital')</a></li>
                            <li><a class="fcolor" href="{{Route('doctor')}}">@lang('navbar.create_doctor')</a></li>
                            <li><a class="fcolor" href="{{Route('doctor_management')}}">@lang('navbar.manage_doctor')</a></li>
                            <li><a class="fcolor" href="{{Route('nurse')}}">@lang('navbar.create_nurse')</a></li>
                            <li><a class="fcolor" href="{{Route('nurse_management')}}">@lang('navbar.manage_nurse')</a></li>                      
                          </ul> 
                        </li>
                        <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.medical_service_management')</span></a>
                          <ul aria-expanded="false" class="collapse">
                            <li><a class="fcolor" href="{{Route('service_provider')}}">@lang('navbar.create_service_provider')</a></li>
                            <li><a class="fcolor" href="{{Route('sp_management')}}">@lang('navbar.manage_sp')</a></li>
                            <li><a class="fcolor" href="{{Route('sp_rep')}}">@lang('navbar.create_sp_rep')</a></li>
                            <li><a class="fcolor" href="{{Route('spr_management')}}">@lang('navbar.manage_rep')</a></li>
                          </ul> 
                        </li>
                        <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.rtw_management')</span></a>
                          <ul aria-expanded="false" class="collapse">
                            <li><a class="fcolor" href="{{Route('service_provider_rtw')}}">@lang('navbar.create_service_provider')</a></li>
                            <li><a class="fcolor" href="{{Route('sprtw_management')}}">@lang('navbar.manage_sp')</a></li>
                            <li><a class="fcolor" href="{{Route('sprtw_rep')}}">@lang('navbar.create_sp_rep')</a></li>
                            <li><a class="fcolor" href="{{Route('sp_rtw_management')}}">@lang('navbar.manage_rep')</a></li>
                          </ul> 
                        </li>
                      </ul>
                    </li>
                    <li><a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.view_audit_trail')</span></a>
                      <ul aria-expanded="false" class="collapse">
                        <li><a class="fcolor" href="{{Route('audit')}}">@lang('navbar.viewlist')</a></li>
                      </ul> 
                    </li>
                    <li><a class="fcolor" href="{{route ('r_task')}}"></i>@lang('navbar.reassign_task')</a></li>
                    <li><a class="fcolor" href="{{route ('user_unavailability')}}"></i>@lang('navbar.manage_user_unavai')</a></li>
                    <li><a class="fcolor" href="{{route ('log')}}"></i>@lang('navbar.view_integration_log')</a></li>
                    <li><a class="fcolor" href="{{route ('calendar')}}"></i>@lang('navbar.manage_calendar')</a></li>
                  </ul>
                </li>
            @endif

            {{-- 04/10/2019 By Ifa --}}
            {{-- @if (checkRole(['ROLOSMB','ROLOMB','ROLOMAB','ROLOSMAB','ROMAB']))
            <li> <a class="fcolor" href="{{Route('workbasket')}}" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">@lang('navbar.home')</span></a></li>

            <li> <a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.medical_board')</span></a>
                <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{Route('takwim')}}" >@lang('navbar.annualagenda') </a></li>
                        <li> <a href="{{Route('set_appt')}}" >@lang('navbar.appointment') </a></li>
                        <li> <a href="{{Route('secretariat')}}" >@lang('navbar.attendance') </a></li>
                </ul>
            </li>

            <li> <a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.decision')</span></a>
                <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{ route('huk_seksyen32') }}" >@lang('navbar.decision_huk')</a></li>
                        <li> <a href="{{ route('tnc_ilat') }}" >@lang('navbar.decision_ilat') </a></li>
                        <li> <a href="{{ route('decision_rayuan_huk') }}" >@lang('navbar.decision_rayuan_huk') </a></li>
                        <li> <a href="{{ route('decision_rayuan_od') }}" >@lang('navbar.decision_rayuan_od') </a></li>
                </ul>
            </li>
            @endif  --}}

            @if (checkRole(['ROLOSMB','ROLOMB','ROLOMAB','ROLOSMAB','ROMAB','SECT','PNL']))
                <li> <a class="fcolor" href="{{Route('workbasket')}}" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">@lang('navbar.home')</span></a></li>

                <li> <a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.medical_board')</span></a>
                    <ul aria-expanded="false" class="collapse">
                            @if(checkRole(['ROLOSMB','ROLOMB','ROLOMAB','ROLOSMAB','ROMAB']))
                              <li> <a class="fcolor" href="{{Route('takwim')}}" >@lang('navbar.annualagenda') </a></li>
                              <li> <a class="fcolor" href="{{Route('set_appt')}}" >@lang('navbar.appointment') </a></li>
                              <li> <a class="fcolor" href="#" >@lang('navbar.case_closure') </a></li>
                            @endif
                            @if (checkRole(['SECT']))
                              <li> <a class="fcolor" href="{{Route('briefcase')}}" >@lang('navbar.briefcase_management') </a></li>
                              <li> <a class="fcolor" href="{{Route('session')}}" >@lang('navbar.session_management') </a></li>
                              <li> <a class="fcolor" href="#" >@lang('navbar.payment_honorium') </a></li>
                            @endif
                            @if(checkRole(['PNL']))
                              <li> <a class="fcolor" href="#" >@lang('navbar.payment_honorium') </a></li>
                            @endif
                    </ul>
                </li>
            @endif                      
</ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
