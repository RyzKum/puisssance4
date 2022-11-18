/*inscription d'un utilisateur*/
INSERT INTO `Utlisateur` (`identifiant`, `email`, `mot_de_passe`, `pseudo`, `date_heure_inscription`, `date_heure_dern_co`)
 VALUES ('3', 'test@test@gmail.com', 'azerty', 'sambatest', '2022-11-10 08:18:35.000000', '2022-11-10 08:18:35.000000');


/*modif de email*/

UPDATE `Utlisateur` 
SET `email` = 'samba.champroux2@gmail.com' 
WHERE `Utlisateur`.`identifiant` = 1;

/*modif de mdp*/
UPDATE `Utlisateur` 
SET `mot_de_passe` = 'azertyfff' 
WHERE `Utlisateur`.`identifiant` = 1;


/* ajouter jeu à la base de données*/
INSERT INTO `jeu` (`id`, `nom_jeu`) VALUES ('4', 'The Tower of memory');

-- Requete Connexion

SELECT * FROM `utlisateur` WHERE `email` = 'baptiste@gmail.com' AND `mot_de_passe` = 'ptdrlo';

/* requette message 24h (pas finis)*/
SELECT * FROM `message(tchat)` WHERE date_heure_mess < 24; 

/* trier du plus récent au plus vieux */
SELECT * FROM `message(tchat)` ORDER BY `date_heure_mess` DESC



