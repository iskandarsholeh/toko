checkTodos();
const deleteAllBtn = document.querySelector(".btn");

// check for data in localStorage

function checkTodos() {
    // todos in the key of my localStorage
    let dataInLocalStorage = localStorage.getItem("todos");
    // check if it is null or not
    if (dataInLocalStorage == null) {
        todos = [];
    } else {
        todos = JSON.parse(dataInLocalStorage);
    }
    let html = "";
    todos.forEach((todo, index) => {
        html += `<div class='card' onclick='removeTodo(${index});'>${todo}</div>`;
    });
    $(".incomplete").empty().append(html);
    const pendingTasksNumb = document.querySelector(".pendingTasks");
    pendingTasksNumb.textContent = todos.length;
}

$(document).ready(function() {
    $('#button').attr('disabled', true);
    $("input").on('keyup', function() {
        var text_value = $("input").val();
        if (text_value != '') {
            $('#button').attr('disabled', false);
        } else {
            $('#button').attr('disabled', true);
        }
    });
});

// adding items in todos
$('#button').click(
    function() {
        todo = $("input").val();
        let todosData = localStorage.getItem("todos");
        if ($("input").val() == '') {
            alert('Input dulu ');
        } else {
            todos = JSON.parse(todosData);
            alert('Data ' + todo + ' sudah masuk');
            todos.push(todo);
            localStorage.setItem("todos", JSON.stringify(todos));
            $("input").val("");
            checkTodos();
        }

    });

// $("input").on("keypress", (e) => {
//     if (e.which === 13 && $("input").val() !== "") {
//         todo = $("input").val();
//         let todosData = localStorage.getItem("todos");
//         if (todosData == null) {
//             todos = [];
//         } else {
//             alert('Data ' + todo + ' sudah masuk');
//             todos = JSON.parse(todosData);

//         }
//         todos.push(todo);
//         localStorage.setItem("todos", JSON.stringify(todos));
//         $("input").val("");
//         checkTodos();
//     }
// });


// logic for removing from the todos list
let removeTodo = (index) => {
    let todosData = localStorage.getItem("todos");
    todos = JSON.parse(todosData);
    todos.splice(index, 1);
    localStorage.setItem("todos", JSON.stringify(todos));
    alert('Data ke ' + index + ' sudah dihapus');
    checkTodos();
};

deleteAllBtn.onclick = () => {
    let todosData = localStorage.getItem("todos"); //getting localstorage
    if (todosData == null) { //if localstorage has no data
        todos = []; //create a blank array
    } else {
        todos = JSON.parse(todosData); //transforming json string into a js object
        todos = []; //create a blank array
    }
    localStorage.setItem("todos", JSON.stringify(todos)); //set the item in localstorage
    alert('Semua data berhasil di hapus');
    checkTodos(); //call the showTasks function
}