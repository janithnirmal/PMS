<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PMS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-dark text-white" style="height: 100vh;">


    <!-- main section -->
    <section class="h-100">
        <div class="col-12">
            <div class="row m-0">
                <!-- navbar -->
                <div class="col-12 bg-danger p-0" style="height: 8vh;">
                    <div class="row m-0">
                        <div class="container">
                            <div class="col-12 p-0">
                                <div class="m-0 py-1 d-flex justify-content-between align-items-center">
                                    <i class="d-block d-md-none bi fs-2 bi-list-nested p-2" onclick="sidebarShow();" id="menuIcon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class="col-12 p-0">
                    <div class="row m-0">
                        <!-- sidebar -->
                        <div class="col-10 p-0 col-md-3 col-lg-3 bg-info  sidebar d-none d-md-flex " style="height: 92vh;" id="sidebar">
                            <div class="row m-0">
                                <!-- sidebar navigation -->
                                <div class="col-12 p-0 bg-info h-75">
                                    <div class="row m-0 p-3 ">
                                        <!-- sidebar items -->

                                        <?php
                                        // for ($x = 0; $x < 5; $x++) {
                                        ?>
                                        <div class="col-12 px-3 py-1 my-1 shadow bg-warning rounded-2">
                                            <span>Todo List</span>
                                        </div>
                                        <?php
                                        // }
                                        ?>
                                    </div>
                                </div>

                                <!-- footer -->
                                <div class="col-12 p-0 bg-success">
                                    <div class="row m-0 p-3">
                                        <span class="fw-bold fs-5 text-dark">Developed by</span>
                                        <span class="fw-bold fs-6">Janith Nirmal</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- main content -->
                        <div class="col-12 p-0 col-md-9 bg-secondary" style="height: 92vh;">
                            <div class="row m-0 p-2">
                                <div class="col-12 py-1 px-2 bg-white rounded-2 text-dark d-flex justify-content-between">
                                    <div class="row m-0">
                                        <div class="col-12 p-0">
                                            <i class="bi bi-circle p-1 fs-4"></i>
                                            <span class="fw-semibold ps-3 py-1 pe-1">Title of the task</span>
                                        </div>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col-12 p-0">
                                            <span class="p-1">12.12.2022</span>
                                            <span class="p-1">12.12.2022</span>
                                            <div class="">
                                                <span class="fw-bold">Status</span>
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="scripts/bootstrap.bundle.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>