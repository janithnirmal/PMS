<?php
require("app/connection.php");
$user = 'rmjanithnirmal@gmail.com';

?>

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
                        <div class="col-10 p-0 col-md-3 col-lg-3 bg-info  sidebar d-none d-md-flex" style="z-index: 2000; height: 92vh;" id="sidebar">
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
                        <div class="col-12 p-0 col-md-9 bg-secondary" style="min-height: 92vh;">
                            <div class="row m-0 p-2">

                                <div class="col-12 py-1 rounded-3 bg-white border-0" onclick="taskAddingButton();" id="taskAdderButton">
                                    <div class="row m-0">
                                        <span class="fw-bold fs-3 text-dark text-center">+</span>
                                    </div>
                                </div>
                                <!-- task adder -->
                                <div class="d-none col-12 py-2 px-2 my-1 bg-white rounded-2 text-dark d-flex justify-content-between" id="taskSection">
                                    <div class="row m-0 w-100">

                                        <div class="col-11 col-lg-12 p-0">
                                            <div class="row m-0 pe-2 pe-lg-0">
                                                <input type="text" class="mb-1 col-12 c-input" placeholder="Task Name...." id="title" />
                                            </div>
                                        </div>

                                        <div class="col-1 d-lg-none d-md-block p-0">
                                            <div class="row m-0 text-center d-flex justify-content-center">
                                                <i class="fs-5 p-0 bi bi-chevron-down drop-down-arrow" id="dropDownId" onclick="dropdownTask();"></i>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6 p-0 d-none d-lg-block overflow-hidden " id="dropdownSection" style="max-height: 400px;">
                                            <div class="row m-0">
                                                <div class="col-md-6  col-12  p-0">
                                                    <div class="row m-0 pe-md-2 pe-0">
                                                        <textarea class="col-12 mt-2 py-2 p-1 c-input" cols="30" rows="3" placeholder="Adda description" id="description"></textarea>
                                                    </div>
                                                </div>


                                                <div class="col-md-6  col-12 p-0 mt-2 ">
                                                    <div class="row m-0">
                                                        <input type="date" class="col-12 me-1 c-input1" id="startingDate" />
                                                        <input type="date" class="col-12 mt-1 me-1 c-input1" id="endingDate" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-12 p-0 py-2">
                                            <div class="row m-0">
                                                <div class="col-6 p-0 ">
                                                    <div class="row m-0 ms-2">
                                                        <div class=" col-8 p-0 fw-bold">
                                                            Importance
                                                        </div>
                                                        <!-- <i class="bi bi-heart p-0"></i> -->
                                                        <div class="col-8 p-0">
                                                            <input name="importance1" type="radio" id="importanceHigh" id="importanceHigh" />
                                                            <label for="importanceHigh">High</label>
                                                        </div>
                                                        <div class="col-8 p-0">
                                                            <input name="importance1" type="radio" id="importanceLow" id="importanceLow" />
                                                            <label for="importanceLow">Low</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6  p-0 ">
                                                    <div class="row m-0 ms-2">
                                                        <div class=" col-8 p-0 fw-bold">
                                                            Urgancy
                                                        </div>
                                                        <!-- <i class="bi bi-heart p-0"></i> -->
                                                        <div class="col-8 p-0">
                                                            <div class="row m-0">
                                                                <div class="col-12 p-0">
                                                                    <input class="" name="importance2" type="radio" id="urgancyHigh" />
                                                                    <label for="urgancyHigh">High</label>
                                                                </div>
                                                                <div class="col-12 p-0">
                                                                    <input name="importance2" type="radio" id="urgancyLow" />
                                                                    <label class="" for="urgancyLow">Low</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2 p-0">
                                            <div class="row h-100 m-0 d-grid pe-1">
                                                <button class="c-input bg-success text-white fw-bold border-0" onclick="todoAdd('<?php echo ($user); ?>');">Add Task</button>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2 p-0" onclick="taskAddingButton();" id="taskAdderButton">
                                            <div class="row h-100 m-0 d-grid ps-1">
                                                <span class="c-input bg-secondary text-white fw-bold border-0 text-center">Cancel</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-0 my-1 overflow-hidden" style="height: 60vh;">
                                    <div class="row m-0 h-100">

                                        <div class="col-12 p-0 h-50 ">
                                            <div class="row m-0">
                                                <div class="col-12 py-3 p-0 h-50">
                                                    <!-- style="overflow: auto;" -->
                                                    <div class="row m-0">

                                                        <div class="col-12 p-0 rounded-2 accordion " id="accordionFlushExample2">
                                                            <div class="">
                                                                <h2 class="accordion-header" id="flush-headingTwo2">
                                                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                                                        Todo Tasks
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseTwo2" class="bg-transparent" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample2" style="overflow: auto; max-height: 20vh;">
                                                                    <!-- todo list -->
                                                                    <?php
                                                                    $todoList_rs = Database::search("SELECT * FROM todo WHERE user_email = '" . $user . "' AND todo_status_id='1' "); //
                                                                    $todoList_num = $todoList_rs->num_rows;

                                                                    for ($x = 0; $x < $todoList_num; $x++) {
                                                                        $todoList_data = $todoList_rs->fetch_assoc();
                                                                    ?>
                                                                        <div class="col-12 py-1 my-2 px-2 bg-white rounded-2 text-dark d-flex justify-content-between" style="cursor: default;" onclick="singleTodoExpand('<?php echo ($x); ?>');">
                                                                            <div class="row w-100 m-0">
                                                                                <div class="col-1 p-0 d-flex align-items-center">
                                                                                    <div class="row m-0 d-flex align-items-center " style="width: 30px;">
                                                                                        <i class=" bi  <?php if ($todoList_data["todo_status_id"] == 1) {
                                                                                                            echo (" bi-circle");
                                                                                                            // echo ("text-dark");
                                                                                                        } else if ($todoList_data["todo_status_id"] == 2) {
                                                                                                            echo ("bi-check-circle ");
                                                                                                            echo ("text-success");
                                                                                                        }
                                                                                                        ?> p-1 fs-4" style="cursor: pointer;" id="todoStatusIcon<?php echo ($x); ?>" onclick="todoStatusChange('<?php echo ($x); ?>', '<?php echo ($todoList_data['todo_id']) ?>', '<?php echo ($todoList_data['todo_status_id']); ?>' );"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-11 ps-2 p-0 ">
                                                                                    <div class="row m-0 d-flex align-items-center ">
                                                                                        <div class="col-11 p-0">
                                                                                            <div class="row m-0">
                                                                                                <span class="fw-bold fs-6 w-100"><?php echo ($todoList_data["title"]); ?></span>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-1 p-0">
                                                                                            <div class="row m-0">
                                                                                                <i class="bi bi-bin"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 p-0">
                                                                                            <div class="row m-0">
                                                                                                <span class="fw-normal" style="font-size: 12px;"><?php echo ($todoList_data["description"]); ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 p-0 d-none" id="singleTodoExtra<?php echo ($x) ?>">
                                                                                            <div class="row m-0" style="padding: 0 12px;">
                                                                                                <div class="col-5 p-0">
                                                                                                    <div class="row m-0 ">
                                                                                                        <span class="fw-bold text-secondary p-0" style="font-size: 14px;">Start Date</span>
                                                                                                        <span class="p-0"><?php echo ($todoList_data["starting_date"]); ?></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-5 p-0">
                                                                                                    <div class="row m-0 ">
                                                                                                        <span class="fw-bold text-secondary p-0" style="font-size: 14px;">End Date</span>
                                                                                                        <span class="p-0"><?php echo ($todoList_data["ending_date"]); ?></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-2 p-0">
                                                                                                    <div class="row m-0">
                                                                                                        <span class="text-primary"><i class="bi bi-snow"></i></span>
                                                                                                        <span class="text-  danger"><i class="bi bi-clock"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 p-0 h-50 ">
                                            <div class="row m-0">
                                                <div class="col-12  py-3 p-0 h-50">
                                                    <div class="row m-0">
                                                        <div class="col-12 p-0 rounded-2 accordion " id="accordionFlushExample">
                                                            <div class="">
                                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                        Done Tasks
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseTwo" class=" bg-transparent collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" style="overflow: auto; max-height: 20vh;">
                                                                    <!-- done section -->
                                                                    <?php
                                                                    $todoList_rs2 = Database::search("SELECT * FROM todo WHERE user_email = '" . $user . "' AND todo_status_id='2' "); //
                                                                    $todoList_num2 = $todoList_rs2->num_rows;

                                                                    for ($y = 0; $y < $todoList_num2; $y++) {
                                                                        $todoList_data2 = $todoList_rs2->fetch_assoc();
                                                                    ?>
                                                                        <div class="col-12 py-1  my-2 px-2 bg-white bg-opacity-50 rounded-2 text-dark d-flex justify-content-between" style="cursor: default;" id="todoCard<?php echo ($y); ?>">
                                                                            <div class="row w-100 m-0">
                                                                                <div class="col-1 p-0 d-flex align-items-center">
                                                                                    <div class="row m-0 d-flex align-items-center " style="width: 30px;">
                                                                                        <i class=" bi  <?php if ($todoList_data2["todo_status_id"] == 1) {
                                                                                                            echo (" bi-circle");
                                                                                                            // echo ("text-dark");
                                                                                                        } else if ($todoList_data2["todo_status_id"] == 2) {
                                                                                                            echo ("bi-check-circle ");
                                                                                                            echo ("text-success");
                                                                                                        }
                                                                                                        ?> p-1 fs-4" style="cursor: pointer;" id="todoStatusIcon<?php echo ($y); ?>" onclick="todoStatusChange('<?php echo ($y); ?>', '<?php echo ($todoList_data2['todo_id']) ?>', '<?php echo ($todoList_data2['todo_status_id']); ?>');"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-11 ps-2 p-0 ">
                                                                                    <div class="row m-0 d-flex align-items-center ">
                                                                                        <div class="col-11 p-0">
                                                                                            <div class="row m-0">
                                                                                                <span class="fw-bold fs-6 w-100"><?php echo ($todoList_data2["title"]); ?></span>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-1 p-0">
                                                                                            <div class="row m-0">
                                                                                                <i class="bi bi-bin"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 p-0">
                                                                                            <div class="row m-0">
                                                                                                <span class="fw-normal" style="font-size: 12px;"><?php echo ($todoList_data2["description"]); ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 p-0">
                                                                                            <div class="row m-0" style="padding: 0 12px;">
                                                                                                <div class="col-5 p-0">
                                                                                                    <div class="row m-0 ">
                                                                                                        <span class="fw-bold text-secondary p-0" style="font-size: 14px;">Start Date</span>
                                                                                                        <span class="p-0"><?php echo ($todoList_data2["starting_date"]); ?></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-5 p-0">
                                                                                                    <div class="row m-0 ">
                                                                                                        <span class="fw-bold text-secondary p-0" style="font-size: 14px;">End Date</span>
                                                                                                        <span class="p-0"><?php echo ($todoList_data2["ending_date"]); ?></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-2 p-0">
                                                                                                    <div class="row m-0">
                                                                                                        <span class="text-primary"><i class="bi bi-snow"></i></span>
                                                                                                        <span class="text-  danger"><i class="bi bi-clock"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
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

                        </div>
                    </div>

                </div>
            </div>
    </section>


    <script src="scripts/bootstrap.bundle.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>