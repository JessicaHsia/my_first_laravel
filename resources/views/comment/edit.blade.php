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
    <title>Edit works</title>
</head>

<body>
    <nav>
        <ul id="my_name">
            <li>Jessica Hsia</li>
        </ul>
    </nav>

    <main class=".container-fluid d-flex justify-content-center">
        <div class=".container-md bg-secondary bg-opacity-50 p-4 rounded-1 d-flex justify-content-start flex-column">
            <div>
                <h3 class="text-white p-2">Edit works</h3>
            </div>
            <form class="form" action="/comment/update/{{$comment->id}}" method="GET">
                {{-- action="" => 填入接受這些資料的網址。需跟routes對應 --}}
                {{-- method="" => 傳過去的方法 --}}
                {{-- 方法有 get post delete --}}
                <label for="basic-url" class="form-label">Works Page Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                        name="page_name" value="{{$comment->page_name}}">
                    {{-- input一定要有 name="" 當傳資料給後端時key&value負責接收的 --}}
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Works Image</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="{{$comment->image}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Works Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                        placeholder="enter works title" name="title" value="{{$comment->title}}">
                </div>
                <label for="basic-url" class="form-label">Works Github URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://github.com/JessicaHsia/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                        name="github_url" value="{{$comment->github_url}}">
                </div>
                <div class="button-box d-flex">
                    <button class="btn text-white btn-warning m-2" type="reset">Reset</button>
                    <button class="btn text-white btn-success m-2" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>
