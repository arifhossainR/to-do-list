
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppsInception</title>
    <link rel="shortcut icon" href="{{asset('assets/images/images.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
<div class="login">
    <div class="logoDiv text-center">
        <a href="./login.html"><img src="{{asset('assets/images/images.jpeg')}}" alt="Logo"></a>
        <h3>AppsInception</h3>
    </div>
    <form action="{{route('storeTask')}}" method="POST">
        @csrf
        <div class="emailDiv inputDivWidth">
            <label for="email">Title</label>
            <input name="title" type="text" placeholder="Type your todo title" id="email">
        </div>
        <div class="passwordDiv inputDivWidth">
            <label for="password">description</label>
            <textarea name="description" id="" cols="70" rows="10"></textarea>
        </div>
        <div class="passwordDiv inputDivWidth">
            <label for="password">Due date</label>
            <input name="due_date" id="" type="date" />
        </div>
        <div class="passwordDiv inputDivWidth">
            <label for="password">Priority Level</label>
            <select name="priority_level" class="priority_select">
                <option value="1">Level 1</option>
                <option value="2">Level 2</option>
                <option value="3">Level 3</option>
            </select>

        </div>
        @if(session()->has('error'))
            <div class="passwordDiv inputDivWidth">
                {{session()->get('error')}}
            </div>
        @endif



        <div class="logInDiv text-center inputDivWidth">
            <button class="login_btn">Submit</button>
        </div>
    </form>

</div>
</body>
</html>
