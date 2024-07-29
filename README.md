# Mon Projet Fil Rouge !
## Présentation
Voilà mon projet fil rouge pour ma formation en développement Web et Web mobile.</brs>

C'est un site fictionnel nommé GourmetBox.
</br>
## Techno
Pour les technos utilisées principalement HTML , CSS , JavaScript et PHP.

## Base de données
Pour la bdd c'est du MySql en localhost que j'utilise.
### Tables
Les deux seules tables sont plats et users

</br>Entrée plats
- id_plats (Clé)
- alt_plats (Description)
- img_plats (Lien vers image)
- name_plats (Nom du plats)
- time_plats (Temps de préparation)
- type_plats (Végétarien/Viande/Poisson)
- week_plats (Semaine actuel/passé/futur du plats)

</br>Entrée users
- id_users (Clé)
- login_users (identifiant des utilisateurs)
- password_users (Mot de passe haché des utilisateurs)
- numberstreet_users (Numéro de rue)
- city_users (Ville)
- postal_users (Code postal)
- country_users (Pays,défaut 'France')

## Fonctionnalité 
La page Recette Semaine va chercher avec l'api les plats pour les afficher en fonction de s'il était de la semaine dernière, cette semaine ou pour la semaine prochaine.</br>

## A faire
- [ ] Transfomrer mon code pour être objet friendly
- [ ] Page de compte utilisateur
- [ ] Finir toutes les pages