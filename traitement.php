<p>Votre message a bien été envoyé</p>
<p>Voici un récapitulatif :</p>

<p>Vous êtes <?php echo $_POST["inputprenom"];?> <?php echo $_POST["inputnom"]; ?></p>

<?php if (!empty($_POST["inputetudiant"])){ ?>

<p>Vous êtes actuellement <?php echo $_POST["inputetudiant"] ?></p>

<?php }else{ 

echo "";

 } 

if(!empty($_POST["inputsalarie"])){ ?>

<p>Vous êtes actuellement <?php echo $_POST["inputsalarie"] ?></p>

<?php }else{ 

echo "";

 } ?>

 <?php if (!empty($_POST["inputcodeur"])){ ?>

<p>Vous êtes aussi <?php echo $_POST["inputcodeur"] ?></p>

<?php }else{ 

echo "";

 } 

if(!empty($_POST["inputdecodeur"])){ ?>

<p>Vous êtes aussi <?php echo $_POST["inputdecodeur"] ?></p>

<?php }else{ 

echo "";

 } ?>

<?php if(!empty($_POST["Message"])){ ?>
 <p>Voici votre message : <br/> 
 	<?php echo $_POST["Message"] ?>
 </p>
<?php } ?>

<?php if(!empty($_POST["metier"])){ ?>
 <p>Vous avez sélectionné : <br/> 
 	<?php echo $_POST["metier"] ?>
 </p>
<?php } ?>

<?php if(!empty($_POST["profession"])){ $profs = $_POST["profession"]; ?>
 <p>Vous avez sélectionné : <br/> <br/>
 	<?php foreach ($profs as $prof) {
 		echo $prof . "<br>";
 	} ?>

 </p>
<?php } ?>




