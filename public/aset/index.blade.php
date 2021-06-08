<!DOCTYPE html>
<html lang="en">

<head>

    <title>Todo by Pratik</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <div class="main">
        <h1>Todo by <a target="_blank" href="sikon.xyz">Sikon</a></h1>
        <input type="text" placeholder="Type and press Enter &#8594;" id="todo" />
        <button id="button">+</button>
        <!-- <div class='actions'>
            <input type="submit" value="Login" disabled="disabled" />
        </div> -->
        <!-- <div class="inputField">
            <input type="text" placeholder="Add your new todo">
            <button><i class="fas fa-plus"></i></button>
        </div> -->
        <p class="text-info">Tap on todo to remove them.</p>
        <div class="container">
            <!-- incomplete todo -->
            <div class="incomplete"></div>
            <div class="complete"></div>
        </div>
        <span>You have <span class="pendingTasks"></span> pending tasks</span>
        <button class="btn">Clear All</button>
    </div>
    <!-- link to jq and external js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="app.js"></script>
</body>

</html>