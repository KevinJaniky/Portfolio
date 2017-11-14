<?php
require_once 'autoload.php';
$user = new User();
$display = new Display('Connexion','Page de connexion',false);
if($user->isConnected()){
    header('location:admin.php');
    die();
}
var_dump($_SESSION);
?>

<body id="connect">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 form-connect">
                <h2 class="text-center">Connexion</h2>
                <form action="" method="post">
                    <?php
                    if(isset($_SESSION['error_connexion'])){
                        echo $_SESSION['error_connexion'];
                        unset($_SESSION['error_connexion']);
                    }
                    ?>
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" class="form-control" name="identifiant" id="identifiant"
                               aria-describedby="Identifiant"
                               placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Connexion</button>
                    <?php
                        if(isset($_POST['identifiant']) && isset($_POST['mdp'])) {

                            $id = trim($_POST['identifiant']);
                            $mdp = trim($_POST['mdp']);

                            if($data = $user->connexion($id,$mdp)) {
                                header('location:admin.php');
                                die();
                            }
                            else {
                                $_SESSION['error_connexion'] = 'Identifiant incorrecte';
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>