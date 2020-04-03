<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jquery</title>
</head>
<style type="text/css">
    .style {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        text-align: center;
    }

    .modal {
        width: 500px;
        max-width: 30%;
        max-height: 20%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .fade_close {
        color: #fff;
        position: absolute;
        top: 5%;
        right: 5%;
        cursor: pointer;
    }

    .button {
        border: 2px solid #CCC;
        background: #179100;
        font-size: 2em;
        color: #fff;
        width: 200px;
        margin: 100px;
        cursor: pointer;
        padding: 10px;
        text-align: center;
    }

    .content{
        max-width: 800px;
        margin: 0 auto;
    }

    .content .slide{
        background: #ccc;
    }

    .content .slide h4{
         background: #333;
        color: #fff;
        padding: 10px;
        cursor: pointer;
    }

    .slide_content{
        display: none;
        margin: 30px;
    }
</style>
<body>

<div class="content">
    <div class="slide">
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        <div class="slide_content">
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book.</p>
        </div>
    </div>
    <div class="slide">
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        <div class="slide_content">
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book.</p>
        </div>
    </div>
    <div class="slide">
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        <div class="slide_content">
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages, and more recently with desktop publishing software like</p>
            <p>Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>
<div class="style">
    <div class="modal">
        <input class="hide" type="text" style="flex-basis: 100%; height: 30px; margin: 10px">
        <input class="toogle" type="text" style="flex-basis: 100%; height: 30px;margin: 10px">
        <button class="button" style="flex-basis: 100%;">Enviar</button>
        <span class="fade_close">X</span>
    </div>
</div>
<div class="button">Abrir</div>
<script src="../js/jquery.js"></script>
<script src="../js/script.js"></script>
</body>
</html>