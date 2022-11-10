-- /inscription d'un utilisateur/
INSERT INTO Utlisateur (identifiant, email, mot_de_passe, pseudo, date_heure_inscription, date_heure_dern_co)
 VALUES ('3', 'test@test@gmail.com', 'azerty', 'sambatest', '2022-11-10 08:18:35.000000', '2022-11-10 08:18:35.000000');


-- /modif de email/

UPDATE Utlisateur 
SET email = 'samba.champroux2@gmail.com' 
WHERE Utlisateur.identifiant = 1;

-- /modif de mdp/
UPDATE Utlisateur 
SET mot_de_passe = 'azertyfff' 
WHERE Utlisateur.identifiant = 1;

INSERT INTO jeu (id, nom_jeu) VALUES ('4', 'The Tower of memory');