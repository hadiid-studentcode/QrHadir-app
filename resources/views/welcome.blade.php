<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Login form responsive</title>  
</head>
<body>

<style>

@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

:root{
    --first-color: blue;
    --text-color: #8590AD;
}

:root{
    --body-font: 'Roboto', sans-serif;
    --big-font-size: 2rem;
    --normal-font-size: 0.938rem;
    --smaller-font-size: 0.875rem;
}
@media screen and (min-width: 768px){
    :root{
        --big-font-size: 2.5rem;
        --normal-font-size: 1rem;
    }  
}

*,::before,::after{
    box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
    font-family: var(--body-font);
    color: var(--first-color);
}
h1{
    margin: 0;
}
a{
    text-decoration: none;
}
img{
    max-width: 100%;
    height: auto;
}

.l-form{
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.shape1,
.shape2{
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.shape1{
    top: -7rem;
    left: -3.5rem;
    background: linear-gradient(180deg, var(--first-color) 0%, rgba(196,196,196,0) 100%);
}
.shape2{
    bottom: -6rem;
    right: -5.5rem;
    background: linear-gradient(180deg, var(--first-color) 0%, rgba(196,196,196,0) 100%);
    transform: rotate(180deg);
}

.form{
    height: 100vh;
    display: grid;
    justify-content: center;
    align-items: center;
    padding: 0 1rem;
}
.form__content{
    width: 290px;
}
.form__img{
    display: none;
}
.form__title{
    font-size: var(--big-font-size);
    font-weight: 500;
    margin-bottom: 2rem;
}
.form__div{
    position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin-bottom: 1rem;
    padding: .25rem 0;
    border-bottom: 1px solid var(--text-color);
}

.form__div.focus{
    border-bottom: 1px solid var(--first-color);
}

.form__div-one{
    margin-bottom: 3rem;
}

.form__icon{
    font-size: 1.5rem;
    color: var(--text-color);
    transition: .3s;
}

.form__div.focus .form__icon{
    color: var(--first-color);
}

.form__label{
    display: block;
    position: absolute;
    left: .75rem;
    top: .25rem;
    font-size: var(--normal-font-size);
    color: var(--text-color);
    transition: .3s;
}

.form__div.focus .form__label{
    top: -1.5rem;
    font-size: .875rem;
    color: var(--first-color);
}

.form__div-input{
    position: relative;
}
.form__input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    background: none;
    padding: .5rem .75rem;
    font-size: 1.2rem;
    color: var(--first-color);
    transition: .3s;
}
.form__button{
    width: 100%;
    padding: 1rem;
    font-size: var(--normal-font-size);
    outline: none;
    border: none;
    margin-bottom: 3rem;
    background-color: var(--first-color);
    color: #fff;
    border-radius: .5rem;
    cursor: pointer;
    transition: .3s;
}
.form__button:hover{
    box-shadow: 0px 15px 36px rgba(0,0,0,.15);
}


.logo {
    position: fixed;
    top: 20px;
    right: 20px;
    width: 150px;
    height: auto; 
    z-index: 999; 
}




@media screen and (min-width: 768px) and (max-width: 967px){
    .form__content{
        width: 70%;
    }
}

@media screen and (min-width: 968px){
    .shape1{
        width: 400px;
        height: 400px;
        top: -11rem;
        left: -6.5rem;
    }
    .shape2{
        width: 300px;
        height: 300px;
        right: -6.5rem;
    }

    .form{
        grid-template-columns: 1.5fr 1fr;
        padding: 0 2rem;
    }
    .form__content{
        width: 50%;
    }
    .form__img{
        display: block;
        width: 90%;
        justify-self: center;
    }
}

</style>

<div class="l-form">
    <div class="shape1"></div>
    <div class="shape2"></div>

    <div class="form">
        <img src="https://img.freepik.com/free-vector/welcome-word-flat-cartoon-people-characters_81522-4207.jpg?w=1380&t=st=1711178574~exp=1711179174~hmac=263fd476dfcb885a32b8190fabd5ab941a7a9a58aec05ac0725f88c68f22acb6" alt="login" class="form__img">

        <form action="/dashboard" class="form__content">
    <h1 class="form__title">Login Gass Absen</h1>

    <div class="form__div form__div-one">
        <div class="form__icon">
            <i class='bx bx-user-circle'></i>
        </div>

        <div class="form__div-input">
            <label for="" class="form__label">Username</label>
            <input type="text" class="form__input">
        </div>
    </div>

    <div class="form__div">
        <div class="form__icon">
            <i class='bx bx-lock'></i>
        </div>

        <div class="form__div-input">
            <label for="" class="form__label">Password</label>
            <input type="password" class="form__input">
        </div>
    </div>
    <input type="submit" class="form__button" value="Login">
</form>

    </div>
    <img src="{{ asset('logo2.png') }}" alt="Logo" class="logo">

</div>

<script>

const inputs = document.querySelectorAll(".form__input")

function addfocus(){
let parent = this.parentNode.parentNode
parent.classList.add("focus")
}

function remfocus(){
let parent = this.parentNode.parentNode
if(this.value == ""){
parent.classList.remove("focus")
}
}


inputs.forEach(input=>{
input.addEventListener("focus",addfocus)
input.addEventListener("blur",remfocus)
})

</script>
</body>
</html>

