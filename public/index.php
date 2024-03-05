<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div x-data="counter">
        <span x-text="count"></span>
        <button x-on:click="increment">Increment</button>
    </div>
    <script src="./dist/bundle.js"></script>
</body>
</html>