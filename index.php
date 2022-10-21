!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Accueil</title>
</head>
<body>
    <div class="header">
        <div></div>
        <div></div>
        <div></div>
        <h1>TD / TP SLAM</h1>
        <div></div>
        <div></div>
        <a class='slamwiki' href="https://slamwiki2.kobject.net/" target="slamwiki">
            <span class="material-symbols-outlined">
                arrow_forward_ios
            </span>
        </a>
    </div>
    <hr>
    <ul></ul>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    html{
        font-family: 'Montserrat', sans-serif;
        background-color: #2E2E2E;
        color: #E8E8E8;
    }
    .header{
        display: grid;
        grid-template-columns: repeat(7,1fr);
        margin-top: 1em;
    }
    h1{
        text-align: center;
    }
    .slamwiki{
        color: #E8E8E8;
        text-decoration: none;
        background-color: #8F8F8F;
        padding: 1em;
        border-radius: 0.5em;
        padding-top: 1.6em;
        text-align: center;
        margin-left: 10em;
        margin-right: 3em;
        margin-bottom: 1em;
    }
    .slamwiki:hover{
        transition: 0.3s;
        background-color: #E6FF42;
        color: #2E2E2E;
        box-shadow: -25px 0px 0px #E8E8E8;
        transform: translate(10px);
    }
    hr{
        width: 75%;
        padding:0.5px;
        background: #E6FF42;
        border:0;
    }
    ul{
        list-style-type: none;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
        margin-right: 2em;
    }
    .tuile{
        display: block;
        padding: 5em;
        background-color: #8F8F8F;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        color: #E8E8E8;
        border-radius: 0.5em;
        margin: 1em;
    }
    .tuile:hover{
        transition: 0.3s;
        background-color: #E6FF42;
        color: #2E2E2E;
        transform: scale(1.02);
        box-shadow: 10px 10px 0px #E8E8E8;
    }
    @media screen and (max-width: 1000px){
        ul{
        list-style-type: none;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
        margin-right: 2em;
        }
    }
    @media screen and (max-width: 500px){
        ul{
        list-style-type: none;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
        margin-right: 2em;
        }
    }
</style>
<script>
    const Link = {"TD 0" : "td0/index.html",
                "TD Mentions légales" : "td1/index.html",
                "TD pâte à crêpes" : "td1/crepes.html",
                "TD4 : Web Arena" : "td4/web-arena-about-us.html",
                "Page de tests" : "test.html"
    }

    var ul = document.querySelector('ul');

    for (let i = 0 ; i < Object.keys(Link).length ; i++) {
        var a = document.createElement('a');
        var li = document.createElement('li');
        a.setAttribute("href",String(Link[Object.keys(Link)[i]]));
        a.setAttribute("class","tuile");
        var textA = document.createTextNode(String(Object.keys(Link)[i]));
        
        a.appendChild(textA);
        li.appendChild(a);
        ul.appendChild(li);
    }

</script>
<script>
    setInterval(function(){location.reload(true);}, 10000);
</script>
</html>