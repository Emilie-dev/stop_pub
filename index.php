<?php 

// database connexion
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=stop_pub;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// We get all the data from the table users
$getAllUsers = $bdd->query('SELECT * FROM users');



// Add a user in the database
$addUser = $bdd->query('INSERT INTO users (user_civility, user_lname, user_fname, user_phone, user_email, user_address, user_city, user_code_postal)
 VALUES
 ('Mme', 'Armand', 'Rébecca', '0123456789', 'arebecca@email.fr','Saint-Didier-des-Bois', 'Paris', '91000')');



// Edit a user in the database
$editUser = $bdd->query('UPDATE users SET user_fname= 'Toto', user_email= 'jdupon@email.fr' WHERE user_id= 1'); 



//Delete a user in the database
$deleteUser = $bdd->query('DELETE FROM users WHERE user_id = 1');

?>