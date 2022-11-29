<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- My script -->
    <script defer src="./script.js"></script>
</head>

<body>
    <main id="app">
        <div class="container text-center ">
            <h1>La mia SassList</h1>
            <div class="row justify-content-center">
                <div class="col-10">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="todo in todoList">{{ todo.text }}</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <input class="form-control" type="text" placeholder="Inserisci un nuovo todo" aria-label="Inserisci un nuovo todo" v-model="newTodo">
                    <button class="btn btn-primary mt-2" @click="addTodo">Salva</button>
                </div>
            </div>
        </div>



</body>

</html>