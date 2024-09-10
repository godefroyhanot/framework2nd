<?php 

print_r($_POST);


function login($username, $password, $loginConfig){
    foreach($loginConfig as $account) {
        if($username === $account["username"]);{
            if($password === $account["password"]){
                return true;
             }
        }
    }
    return false;
}

if(isset($_POST) && count($_POST)) {
    echo "bien envoyé !";

    echo $_POST('name') . " a envoyé un message ";
}


login($_POST["username"], $_POST["password"], $loginConfig);

?>

<form action="#" method="post">

<div>
    <label for="name"> Nom d'utilisateur</label>
    <input type="text" name="name" required>
</div>

<div>
    <label for="password"> Mot de pass</label>
    <input type="password" name="password" required>
</div>

<div>
    <input type="submit" value="Se Connecter">
</div>
</form>