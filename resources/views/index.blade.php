@extends('layouts.app')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Network</title>
</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>
</body>
</html>
<script>
    import ExampleComponent from "../js/components/ExampleComponent";
    export default {
        components: {ExampleComponent}
    }
</script>
