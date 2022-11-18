<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Banner管理</title>
    <style>
        th, td, tr{
           width: 200px;
        }
    </style>
</head>

<body>
    <nav>
        <ul id="my_name">
            <li>Jessica Hsia</li>
        </ul>
    </nav>

    <main class=".container-fluid d-flex justify-content-center">
        <div class=".container-md bg-secondary bg-opacity-50 p-4 rounded-1 d-flex justify-content-start flex-column">
            <form class="form" action="/comment/save" method="GET">
            <div class="d-flex justify-content-between">
                <h3 class="text-white p-2">Banner管理</h3>
                <li><a class="btn text-black btn-success" type="add">+</a></li>

            </div>
                {{-- action="" => 填入接受這些資料的網址。需跟routes對應 --}}
                {{-- method="" => 傳過去的方法 --}}
                {{-- 方法有 get post delete --}}
                @csrf
                <table class="table caption-top">
                    <thead class="text-white">
                        <tr>
                            <th scope="col">圖片預覽</th>
                            <th scope="col">圖片權重</th>
                            <th scope="col">功能</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <th scope="row">
                                <img src="{{asset('img/mooncard.jpg')}}" class="w-100" >
                            </th>
                            <td class="text-center lh-lg fw-bold">1</td>
                            <td>
                                <button class="btn fs-6 text-black btn-warning m-1" type="edit">edit</button>
                                <button class="btn fs-6 text-black btn-danger m-1" type="delete">delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="{{asset('img/mooncard.jpg')}}" class="w-100">
                            </th>
                            <td class="text-center lh-lg fw-bold">1</td>
                            <td>
                                <button class="btn fs-6 text-black btn-warning m-1" type="edit">edit</button>
                                <button class="btn fs-6 text-black btn-danger m-1" type="delete">delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="{{asset('img/mooncard.jpg')}}" class="w-100">
                            </th>
                            <td class="text-center lh-lg fw-bold">1</td>
                            <td>
                                <button class="btn fs-6 text-black btn-warning m-1" type="edit">edit</button>
                                <button class="btn fs-6 text-black btn-danger m-1" type="delete">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>
