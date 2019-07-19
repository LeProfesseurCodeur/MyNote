<?php 
	session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }

    require_once('header.php'); 
	require_once('footer.php'); 
	require_once('db/dbconf.php');
    require_once('showProfilePic.php');
?>

<div id="nav-section">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1 class="title-note">WacKeep</h1></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="profile" src="<?php echo $profilePic ?>" alt="profile"> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a><h4><?php echo $fullName ?></h4></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- fin navbar-collapse -->
        </div><!-- fin container-fluid -->
    </nav>
</div>
<!-- Script permettant de changer la couleur des notes -->
<script>
    function color() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#e74c3c";
            i++;
        }
    }
    function color2() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#38BDFF";
            i++;
        }
    }
    function color3() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#2ecc71";
            i++;
        }
    }
    function color4() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#E1E1E1";
            i++;
        }
    }
    function color5() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#f1c40f";
            i++;
        }
    }
    function color6() {
        var count = document.body.getElementsByClassName('notepad').length;
        var i=0;
        while(i<count)
        {
            document.body.getElementsByClassName('notepad')[i].style="background:#e67e22";
            i++;
        }
    }
</script>

<!-- Button color -->
<div class="box">
    <a onclick="color()"  id='red'>#e74c3c</a>
    <a onclick="color2()" id='blue'>#38BDFF</a>
    <a onclick="color3()" id='green'>#2ecc71</a>
    <a onclick="color4()" id='gray'>#E1E1E1</a>
    <a onclick="color5()" id='yellow'>#f1c40f</a>
    <a onclick="color6()" id='orange'>#e67e22</a>
</div>

<!-- script button color body -->
<script type="text/javascript">
    function changecolor(id) {
        document.body.style.background = document.getElementById(id).innerHTML;
    }
</script>

<div id="layout">
    <!-- Bouton ajouter une nouvelle note -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Ajouter une note</button>

    <!-- Ajout du nouveau form  -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2>Ajouter votre note</h2>
                </div>

                <form method="POST" action="create.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <!-- Menu pour ajouter nouvelle note -->
                            <input class="form-control" type="Text" name="title" autofocus='autofocus' placeholder="Titre">
                            <br>
                            <textarea class="form-control" rows='10' name="description" placeholder="Contenu"></textarea>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <!-- Boutons enregistrer et quitter lors de l'ajout de la nouvelle note -->
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <button class="btn btn-danger" type="button" data-dismiss='modal' aria-hidden='true'>Quitter</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- fin AddNote Form -->
    <div id="result"></div>
    <!-- fin ListNote -->
</div>