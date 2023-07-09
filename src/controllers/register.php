<?php
##################################
# X CMS © 2017 - By 「Nox」#4805 #
##################################

if(isset($_POST['register_validation']))
{
    $formAccount = htmlspecialchars(strtolower($_POST['formAccount']));
    $formPassword = htmlspecialchars(md5($_POST['formPassword']));
    $formPasswordConf = htmlspecialchars(md5($_POST['formPasswordConf']));
    $formEmail = htmlspecialchars($_POST['formEmail']);
    $formPseudo = htmlspecialchars($_POST['formPseudo']);
    $formQuestion = htmlspecialchars($_POST['formQuestion']);
    $formReponse = htmlspecialchars($_POST['formReponse']);

    $secret="6LfSC78ZAAAAAP6ef2bR7D_wPzwzgNphPPsuw4ml";

    if($formAccount == null || $formPassword == null || $formPasswordConf == null || $formPseudo == null || $formEmail == null || $formQuestion == null || $formReponse == null)
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> Porfavor complete todos los campos.</p>';
    }
    elseif($formPasswordConf != $formPassword)
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> Las contraseñas no coinciden.</p>';
    }
    elseif(strlen($formAccount) < 4)
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> El nombre de usuario es muy corto.</p>';
    }
    elseif(!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $formEmail))
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> El formato del correo electrónico es inválido.</p>';
    }
    elseif(!preg_match("#^[a-zA-Z0-9._-]+$#", $formPseudo))
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> El apodo solo puede contener letras y números.</p>';
    }
    elseif(!preg_match("#^[a-zA-Z0-9]+$#", $formAccount))
    {
        echo '<p class="alert warning"><span class="material-icons">warning</span> El nombre de usuario solo puede contener letras y números.</p>';
    }
    else {
        $sql = "SELECT Login FROM accounts WHERE Login = ?";
        $stmt = $conn->prepare($sql);
        $sql2 = "SELECT Nickname FROM accounts WHERE Nickname = ?";
        $stmt2 = $conn->prepare($sql2);
        
        $exists = false;
        
        if ($stmt) {
            $stmt->bind_param("s", $formAccount);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                echo '<p class="alert warning"><span class="material-icons">warning</span> El nombre de usuario ya existe.</p>';
                $exists = true;
            }
            $stmt->close();
        }
        
        if (!$exists && $stmt2) {
            $stmt2->bind_param("s", $formPseudo);
            $stmt2->execute();
            $stmt2->store_result();
            if ($stmt2->num_rows > 0) {
                echo '<p class="alert warning"><span class="material-icons">warning</span> El apodo ya existe.</p>';
                $exists = true;
            }
            $stmt2->close();
        }

        if (!$exists) {
            $date = date("Y-m-d H:i:s", time());
            $subscriptionEnd = date("Y-m-d H:i:s", time());
        
            $request = $conn->prepare('INSERT INTO accounts (Login, PasswordHash, Nickname, Email, SecretQuestion,  SecretAnswer, CreationDate, Lang, Role, IsBanned, SubscriptionEnd) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
            $request->execute(array($formAccount, $formPassword, $formPseudo, $formEmail, $formQuestion, $formReponse, $date, 'es', '1', '0', $subscriptionEnd));
            echo '<p class="alert valid"><span class="material-icons">check_circle</span>¡Te has registrado satisfactoriamente!</p>';
            $request->free_result();
        }        
    }
}
?>