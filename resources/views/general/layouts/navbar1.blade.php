{{-- @section('css')
<style> --}}

{{-- </style>
@endsection --}}
{{-- @section('comtent') --}}
<nav id="menu">
  <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
  <input type="checkbox" id="tm">
  <ul class="main-menu clearfix">
     {{-- <li><a class="fcolor" href="/Audittrail"><i class="icon-home"></i>@lang('navbar.home')</a></li> --}}
    <li><a href="/Audittrail"><i class="icon-home"></i>@lang('navbar.home')</a></li>
   
    <li><a href="#">@lang('navbar.admin') 
        <span class="drop-icon">▾</span>
        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
      </a>
      <input type="checkbox" id="sm1">
      <ul class="sub-menu">
        {{-- <li><a href="#">Item 2.1</a></li> --}}
        <li><a href="#">@lang('navbar.manage_branch') 
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="{{Route('branch')}}">@lang('navbar.create_branch')</a></li>
            <li><a href="{{Route('branch_management')}}">@lang('navbar.management')</a></li>
          </ul>
        </li>
        <li><a href="#">@lang('navbar.manage_user_id')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="{{Route('regis')}}"></a></li>
            <li><a href="{{Route('user_management')}}"></a></li>
          </ul>
        </li>
          <li><a href="#">@lang('navbar.manage_ref_code')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
          <li><a href="#">@lang('navbar.view_audit_trail')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
         <li><a href="#">@lang('navbar.reassign_task')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
        <li><a href="#">@lang('navbar.manage_user_unavai')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
        <li><a href="#">@lang('navbar.view_integration_log')
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</nav>