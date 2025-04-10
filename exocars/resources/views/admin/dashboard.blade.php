<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link
    href="{{ asset('vendor/dashboard/fontawesome-free/css/all.min.css') }}"
    rel="stylesheet"
    type="text/css" />

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/dashboard/sb-admin-2.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this page -->
  <link
    href="{{ asset('vendor/dashboard/datatables/dataTables.bootstrap4.min.css') }}"
    rel="stylesheet" />

  <!-- Custom icons-->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />

  <!-- Custom styles-->
  <link rel="stylesheet" href="{{ asset('css/dashboard/styles.css') }}" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul
      class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
      id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="/admin">
        <div class="sidebar-brand-text mx-3">Admin Page</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">Home Page</div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="bx bxs-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav
          class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button
            id="sidebarToggleTop"
            class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <i class="bx bx-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div
                class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a
                  class="dropdown-item"
                  href="#"
                  data-toggle="modal"
                  data-target="#logoutModal">
                  <i
                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                Table of Scheduled Visits
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  class="table table-bordered"
                  id="visitsDataTable"
                  width="100%"
                  cellspacing="0">
                  <thead>
                    <tr>
                      <th>Meeting Id</th>
                      <th>User Id</th>
                      <th>Name</th>
                      <th>Car</th>
                      <th>Car Id</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Remove Meeting</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Meeting Id</th>
                      <th>User Id</th>
                      <th>Name</th>
                      <th>Car</th>
                      <th>Car Id</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Remove Meeting</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($meetings as $meeting)
                    <tr>
                      <th>{{ $meeting['m_id'] }}</th>
                      <th>{{ $meeting['a_id'] }}</th>
                      <th>
                        @foreach ($accounts as $account)
                        @if($meeting['a_id'] == $account['a_id'])
                        {{ $account['f_name'] }}
                        @break
                        @endif
                        @endforeach
                      </th>
                      <th>
                        @foreach ($listings as $listing)
                        @if($meeting['c_id'] == $listing['c_id'])
                        {{ $listing['model'] }}
                        @break
                        @endif
                        @endforeach
                      </th>
                      <th>{{ $meeting['c_id'] }}</th>
                      <th>{{ $meeting['date'] }}</th>
                      <th>{{ $meeting['time'] }}</th>
                      <td>
                        <form action="{{ route('destroy.meeting', $meeting['m_id']) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Meeting {{ $meeting['m_id'] }} </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- User DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                Table of Users
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  class="table table-bordered"
                  id="userDataTable"
                  width="100%"
                  cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>E-mail</th>
                      <th>Remove User</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>E-mail</th>
                      <th>Remove User</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($accounts as $account)
                    <tr>
                      <td>{{ $account['a_id'] }}</td>
                      <td>{{ $account['f_name'] }}</td>
                      <td>{{ $account['l_name'] }}</td>
                      <td>{{ $account['e_mail'] }}</td>
                      <td>
                        <form action="{{ route('destroy.user', $account['a_id']) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">User {{ $account['a_id'] }} </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="car_insert">
            <button id="insert_a_listing" type="button" class="btn btn-success" onclick="displayInsert()">Insert a Listing</button>
            <div class="insert_form" id="listing_form">
              <form action="{{ route('insert.listing') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid text-center">
                  <h1>Insert a Car</h1>
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Car Model"
                          name="model"
                          value="{{ old('model') }}"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Car Mileage"
                          name="mileage"
                          value="{{ old('mileage') }}"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Car description"
                          name="comments"
                          value="{{ old('comments') }}"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Make Year"
                          name="make_year"
                          value="{{ old('make_year') }}"
                          required />
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Price"
                          name="price"
                          value="{{ old('price') }}"
                          required />
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Manufacturer"
                          name="manufacturer"
                          value="{{ old('manufacturer') }}"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Displacement"
                          name="displacement"
                          value="{{ old('displacement') }}"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Power"
                          value="{{ old('power') }}"
                          name="power"
                          required />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Color"
                          name="color"
                          value="{{ old('color') }}"
                          required />
                      </div>
                    </div>
                    <div class="col-6">
                      <input class="form-control" type="file" id="formFile" name="img_path" required />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-6">
                      <button id="submit_car_button" type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="col-6">
                      <button id="cancel_car_button" class="btn btn-danger" onclick="hideInsert()">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          @if($errors->any())
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif
          <!-- Listings DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                Table of Listings
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  class="table table-bordered"
                  id="listingsDataTable"
                  width="100%"
                  cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Model</th>
                      <th>Price</th>
                      <th>Mileage</th>
                      <th>Preview</th>
                      <th>Remove Listing</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Model</th>
                      <th>Price</th>
                      <th>Mileage</th>
                      <th>Preview</th>
                      <th>Remove Listing</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($listings as $listing)
                    <tr>
                      <th>{{ $listing['c_id'] }}</th>
                      <th>{{ $listing['model'] }}</th>
                      <th>{{ $listing['price'] }}</th>
                      <th>{{ $listing['mileage'] }}</th>
                      <th><img
                          src="{{ asset($listing['img_path']) }}"
                          class="img-thumbnail"
                          id="listingImg"
                          alt="...">
                      </th>
                      <td>
                        <form action="{{ route('destroy.listing', $listing['c_id']) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Listing {{ $listing['c_id'] }} </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ExoCars </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button
            class="close"
            type="button"
            data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-secondary"
            type="button"
            data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="/login">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/dashboard/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/dashboard/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/dashboard/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/dashboard/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/dashboard/demo/datatables-demo.js') }}"></script>

  <!-- Button action handler scripts-->
  <script src="{{ asset('js/dashboard/form-handler.js') }}"></script>
</body>