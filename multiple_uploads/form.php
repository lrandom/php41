<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="do-upload.php" enctype="multipart/form-data">
    <div class="wrap-input">
        <input type="file" name="files[]"/>
    </div>
    <div class="btn-add" onclick="addMoreInput()">+</div>
    <button style="display: block">Submit All</button>
</form>
<style type="text/css">
    input {
        display: block;
    }

    .btn-add {
        display: inline-block;
        padding: 20px;
        background: orange;
    }
</style>
<script type="text/javascript">
    function addMoreInput() {
        const wrapInput = document.querySelector('.wrap-input');
        const input = wrapInput.querySelector('input:first-child');
        const cloneInput = input.cloneNode(true);//clone ra một đối tương dom mới
        wrapInput.appendChild(cloneInput);//gắn cái input mới vào wrap-input
    }
</script>
</body>
</html>