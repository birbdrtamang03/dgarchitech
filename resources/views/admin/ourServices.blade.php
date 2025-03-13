<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services Management</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('adminComponents.sidebar')

            <!-- content -->
            <div class="layout-page">
                @include('adminComponents.navBar')

                <!-- / Navbar -->

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @if(session('success'))
                        <script>
                        Swal.fire({
                            title: "Success!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            timer: 3000, // Auto close after 3 seconds
                            showConfirmButton: false
                        });
                        </script>
                        @endif
                        <h4 class="fw-bold py-3 mb-4">Manage Service Content</h4>
                        <div class="row" style="max-height: 790px; overflow-y: auto;">


                            <!-- Hero Banner content management  -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">#Service Header Content</h5>
                                    <form action="{{route('serviceHeader.store')}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body demo-vertical-spacing demo-only-element">
                                            <div class="mb-3">
                                                <label for="header" class="form-label">Header</label>
                                                <input id="header" class="form-control" type="text"
                                                    placeholder="Enter header" name="header" required />
                                            </div>
                                            <div class="mb-3">
                                                <label for="sub_content" class="form-label">Sub Text</label>
                                                <input id="sub_content" class="form-control" type="text"
                                                    placeholder="Enter Sub-Content" name="sub_content" required />
                                            </div>

                                            <button class="btn btn-primary d-grid w-40"
                                                style="background-color: #63b701; border:none" type="submit">Update
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Service Content Management -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">#Service Content</h5>
                                    <form action="{{route('serviceContent.store')}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body demo-vertical-spacing demo-only-element">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input id="title" class="form-control" type="text"
                                                    placeholder="Enter title" name="title" required />
                                            </div>
                                            <div class="mb-3">
                                                <label for="content" class="form-label">Content</label>
                                                <textarea id="content" class="form-control" type="text"
                                                    placeholder="Enter content" name="content" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="images" class="form-label">Images</label>
                                                <div id="image-inputs">
                                                    <input class="form-control mb-2" type="file" name="images[]" required />
                                                </div>
                                                <button type="button" class="btn btn-secondary" onclick="addImageInput()">+</button>
                                            </div>
                                            <button class="btn btn-primary d-grid w-40"
                                                style="background-color: #63b701; border:none" type="submit">Update
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
    function addImageInput() {
        const imageInputs = document.getElementById('image-inputs');
        const newInput = document.createElement('input');
        newInput.className = 'form-control mb-2';
        newInput.type = 'file';
        newInput.name = 'images[]';
        newInput.required = true;
        imageInputs.appendChild(newInput);
    }
    </script>
</body>

</html>
