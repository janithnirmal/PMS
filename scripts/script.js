// animations
function sidebarShow() {
    let menuButton = document.getElementById("sidebar");
    let menuIcon = document.getElementById("menuIcon");
    let sidebar = document.getElementById("sidebar");

    sidebar.classList.toggle("sidebar-mover-right");

    menuButton.classList.toggle("d-none");
    menuButton.classList.toggle("c-shadow");
    menuIcon.classList.toggle("bi-list-nested");
    menuIcon.classList.toggle("bi-x-lg");

}



// dropdown
let dropped = false;
function dropdownTask() {
    let dropdownSection = document.getElementById("dropdownSection");
    let dropDownId = document.getElementById("dropDownId");

    dropdownSection.classList.toggle("dropdown-section");
    dropDownId.classList.toggle("drop-down-icon");

    if (dropped) {
        dropdownSection.classList.toggle("dropdown-section-default");
        setTimeout(() => {
            dropdownSection.classList.toggle("d-none");
            dropdownSection.classList.toggle("dropdown-section-default");
        }, 700);
        dropped = false;
    } else {
        dropdownSection.classList.toggle("d-none");
        dropped = true;
    }

}



// todo Add

function todoAdd(userMail) {
    let taskName = document.getElementById("title").value;
    let description = document.getElementById("description").value;

    let request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            var t = request.responseText;
            if (t == "success") {
                location.reload();
            } else {
                alert(t);
            }
        }
    }

    request.open("GET", "app/todoAddProcess.php?title=" + taskName + "&des=" + description + "&user=" + userMail, true);
    request.send();
}

// todoStatusChange

function todoStatusChange(icon, todoId, status) {
    let iconId = icon;
    let todoStatusIcon = document.getElementById(iconId);


    // icon checked status changer
    if (status == 1) {
        status = 2;
    } else if (status == 2) {
        status = 1;
    }


    // send checked status to db
    let r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            let t = r.responseText;
            if (t == "success") {
                todoStatusIcon.classList.toggle("bi-circle");
                todoStatusIcon.classList.toggle("bi-check-circle");
                todoStatusIcon.classList.toggle("text-success");

                // done hider
                if (status == 2) {


                    let todoItemCard = document.getElementById("todoCard" + icon);
                    todoItemCard.classList.toggle("todo-item");
                    setTimeout(() => {
                        todoItemCard.classList.toggle("todo-item");
                        todoItemCard.classList.toggle("d-none");
                        window.location.reload();
                    }, 400);
                }
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "app/modifyTodo.php?status=" + status + "&todoId=" + todoId, true);
    r.send();


}


// singleTodoExpand event
function singleTodoExpand(id) {

    let singleTodoExtra = document.getElementById("singleTodoExtra" + id);
    singleTodoExtra.classList.toggle("d-none");
}


// task adding button
function taskAddingButton() {
    let taskSection = document.getElementById("taskSection");
    let taskAdderButton = document.getElementById("taskAdderButton");

    taskSection.classList.toggle("d-none");
    taskAdderButton.classList.toggle("d-none");
}