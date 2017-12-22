<?php require 'form.php'; ?>


<form method="post" action="traitement.php">
	
	<?php $form1 = new Form('Formulaire de contact');

	// Rentrez en paramètre le type, le nom, la valeur et enfin le placeholder.
	
		$form1->addinput('text', 'inputprenom', '', 'Prénom');
		$form1->addinput('text', 'inputnom', '', 'Nom');

		$form1->addinput('radio', 'inputetudiant', 'etudiant', 'Etudiant');
		$form1->addinput('radio', 'inputsalarie', 'salarie', 'Salarié');

		$form1->addinput('checkbox', 'inputcodeur', 'codeur', 'Codeur');
		$form1->addinput('checkbox', 'inputdecodeur', 'décodeur', 'Décodeur');

	// Rentrez en paramètre le placeholder.

		$form1->addtextarea('Message');

	// Rentrez en paramètre si c'est un sélecteur multiple et les options du champ select dans un tableau.

		$form1->addselect('metier', '', array('Jardinier', 'Patissier', 'Charpentier'));

		$form1->addselect('profession[]', 'multiple', array('Destinataire', 'Utilisateurs', 'Codeurs'));

		$form1->addinput('submit', '', 'Youhou', '');
	 ?>

</form>

