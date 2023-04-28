<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/cloud9_logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        {{-- <div>
                    <h4 class="logo-text">Cloud9</h4>
                </div> --}}
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('index') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Retailer</div>
            </a>
            <ul>
                <li> <a href="{{ route('retailer') }}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
                <li> <a href="{{ route('retailer-create') }}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Shop</div>
            </a>
            <ul>
                <li> <a href="{{ route('shop') }}"><i class="bx bx-right-arrow-alt"></i>List</a>
                </li>
                <li> <a href="{{ route('shop-create') }}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
