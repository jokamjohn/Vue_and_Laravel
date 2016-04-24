<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

</head>
<body>
<div class="container">
    <div class="content">

        <div id="app">

            <tasks></tasks>

        </div>

    </div>
</div>

<template id="tasks-template">

    <h1>Tasks</h1>

    <ul class="list-group" v-for="task in list">
        <li class="list-group-item">
            @{{ task.body }}

            <strong @click="deleteTask(task)">X</strong>

        </li>
    </ul>

</template>


<script src="js/vue.js"></script>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
