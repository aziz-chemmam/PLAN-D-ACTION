<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "BLOG";



try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE IF NOT EXISTS  utilisateurs(

        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255) NOT NULL,
        EMAIL VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL

  )";

  $sql = "CREATE TABLE IF NOT EXISTS article (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date DATETIME NOT NULL,
    utilisateurId INT UNSIGNED NOT NULL,
    FOREIGN KEY (utilisateurId) REFERENCES utilisateurs(id)
  )";

  $sql = "CREATE TABLE IF NOT EXISTS commentaire (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT NOT NULL,
    date DATETIME NOT NULL,
    utilisateur_id INT UNSIGNED NOT NULL,
    article_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (article_id) REFERENCES article(id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
  )";


    $conn->exec($sql);
    // echo "Tables created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


$conn = null;
?>