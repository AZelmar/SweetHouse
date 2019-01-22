<?php
class base{
const websiteName = "SweetHouse";
}
class header{
const home = "Accueil";
const register= "Inscription";
const login = "Connexion";
const help = "Aide";
const faq = "FAQ";
const forum = "Forum";
const contact = "Contactez-nous !";
const houseControl = "Gestion Maison";
const profileControl = "Gestion Profil";
const adminManagement = "Gestion Admin";
const adminProfil = "Profil Admin";
const logout = "Déconnexion";
const shop ="Magasin";
const forumAdministrateur = "Forum Administrateur";
const technicianProfileControl = "Profil Technicien";
const technicianHouseControl = "Maison Technicien";
const technicianRdv = "RDV Technicien";
const technicianForum = "Forum Technicien";
const gestionCapteurs = "Gestion Capteurs";
}
class footer{
const copyright = "©SweetHouse 2018";
}
class modalContact{
const pageName = "Contactez nous";
const contactFacebook = "Notre Facebook";
const contactTwitter = "Notre Twitter";
const contactInstagram = "Notre Instagram";
const contactEmail = "Notre adresse email de support";
}
class register{
const pageName = "Inscription";
const inputFirstName = "Nom:";
const inputLastName = "Prénom:";
const inputAge = "Age:";
const inputPassword = "Mot de passe :";
const inputPasswordConfirm = "Répetez mot de passe :";
const inputGender = "Genre :";
const optionGenderMale = "Homme";
const optionGenderFemale = "Femme";
const inputType = "Type :";
const optionTypeIndividual = "Particulier";
const optionTypeProfessional = "Professionel";
const inputEmail = "Adresse email :";
const inputPhone = "Numéro de télephone:";
const inputAdress = "Adresse :";
const inputZipCode = "Code postal :";
const inputCity = "Ville :";
const inputCountry = "Pays :";
const optionCountryFrance = "France";
const optionCountryCanada = "Canada";
const optionCountrySpain = "Espagne";
const inputCGU = "Acceptez les CGU :";
const inputSubmit = "Valider";
}
class login{
const pageName = "Connexion";
const inputEmail = "Votre adresse email :";
const inputPassword = "Votre mot de passe :";
const inputRemember = "Se souvenir de moi :";
const inputSubmit = "Valider";
const inputForgot = "Mot de passe oublié ?";
}
class forgotPassword{
const pageName = "Mot de passe oublié";
const inputEmail = "Votre adresse email :";
const inputSubmit = "Valider";
}
class resetPassword{
const pageName = "Réinitialiser mot de passe";
const inputPassword = "Nouveau mot de passe :";
const inputPasswordConfirm = "Répetez nouveau mot de passe :";
const inputSubmit = "Valider";
}
class error404{
const pageName = "Erreur 404";	
const message = "Cette page n'existe pas !";
}
class download{
const pageName = "Télechargement de fichier";	
}
class emptyPage{
const pageName = "";	
}
class profile{
const pageName = "Profil Utilisateur";
const profileMan = " Gestion du profil";
const modifyHome= " Modifier votre adresse de domicile :";
const modifyWork= " Modifier votre adresse bureau :";
const modifyName= " Modifier votre nom :";
const modifySurname= " Modifier votre prénom :";
const modifySex= " Modifier votre sexe :";
const contact= " Contacter son technicien :";
const delAcc= " Supprimer son compte: (Écrivez 'OUI' si vous voulez supprimez votre compte) ";
const infosGen= "Informations générales";
const hello = "Bonjour ";
const domHouse="Vos lieux domotisés  :";
const house=" Maison :";
const work= " Entreprise :";
const tech=" Pas de problemes techniques ";
const intrus= " Pas d'intrusions ";
const suppAcc= " Compte supprimé en moins de 7 jours";
const del="Modifier";
const man="Homme";
const woman="Femme";
const other="Autre";
}

class shop{
const pageName ="Magasin";
const addSensors= "Ajout de capteurs";
const livingRoom= "Salon";
const room= "Chambre";
const kitchen= "Cuisine";
const bathroom= "Salle de bain";
}
class GestionCapteurs{
const pageName ="Gestion maison";
const Sensors= "capteurs";
const livingRoom= "Salon";
const room= "Chambre";
const kitchen= "Cuisine";
const bathroom= "Salle de bain";
}

class faq{

    const title = "Questions classiques & FAQ ";
    const presentationFAQ = "Dans cette Foire Aux Questions vous pourrez retrouver toutes les questions classiques que les utilisateurs peuvent se poser quant à l’utilisation de la plateforme de gestion des capteurs ou les capteurs eux-mêmes. Un Forum est également à la disposition des utilisateurs dans le cas où la réponse aux questions des utilisateurs ne serait pas déjà mentionnée dans la FAQ. Les administrateurs de la plateforme prendront soin d’actualiser les questions traitées dans la FAQ afin de s’adapter aux questions les plus fréquentes. Néanmoins, nous sommes tout à fait ouverts à la suggestion de question récurrentes que d’autres utilisateurs pourraient venir à se poser. N’hésitez donc pas à nous contacter grâce à l’onglet Contactez-Nous, nous ferons tout notre possible pour vous répondre dans de plus brefs délais.";
    const gererMaison = "La plateforme Sweet House est là pour vous proposer une gestion complète de votre maison domotisée ainsi que l’ensemble des capteurs que vous pourriez posséder dans cette maison. La gestion des capteurs est disponible via l’onglet Gestions Capteurs où vous pourrez retrouver l’ensemble des capteurs présents dans votre maison avec la possibilité de modifier l’état de ceux-ci.";
    const malfonctionnementCapteur = "La raison la plus fréquente liée au disfonctionnement d’un capteur est un problème de batterie. Veillez donc à regarder si les témoins lumineux de votre capteur sont allumés. Si ce n’est pas le cas, tentez de remplacer les piles de votre capteur en prenant soin de disposées celles-ci dans le sens correct. Si malgré cette tentative le capteur ne fonctionne toujours pas, vous pouvez prendre RDV avec un technicien de manière à ce que celui-ci remplace au plus vite votre capteur. Sinon, vous pouvez bien évidemment passer par la boutique afin de commander un nouveau capteur adéquat.";
    const ajouterCapteur = "Pour ajouter un capteur, une demande à l’administrateur est nécessaire. En effet, la mise en place de capteurs est gérée par l’administrateur afin d’éviter tous surchargement de la plateforme. Vous pouvez donc entrer en contact avec celui-ci de différentes manières et celui-ci vous répondra dans les plus brefs délais. Un RDV avec un technicien sera par la suite nécessaire dans le cas où l’installation d’un capteur serait nécessaire.";
    const malfonctionnementActionneur = "Pour répondre à cette question, nous vous invitons à vous référer à la section « Pourquoi mon capteur ne fonctionne plus ».";
    const ajouterActionneur = "Pour répondre à cette question nous vous invitons à vous référer à la section « Comment ajouter une option ».";
    const informationSecurity = "L’ensemble de vos informations sont contenues dans un serveur sécurisé physiquement et technologiquement au sein des locaux de DomIsep. Les développeurs de la plateforme Sweet House ont mis en place de nombreux protocoles de sécurité afin que vous seul et l’administrateur lié à votre compte soit les seuls maître de vos informations. Votre mot de passe a donc été crypté au sein de la base de données et l’ensemble des données personnelles sont protégées par nos Conditions Générales d’Utilisation que ces informations ne seront en aucun cas utilisé à des fins autres que la gestion domostisée de votre maison. Si vous avez quelconque question à ce sujet n’hésitez pas à contacter un administrateur grâce à l’onglet « Contactez nous ».";
    const serviceClient = "Toutes les informations pour le contact du service client sont contenues dans l’onglet Contactez Nous dans l'onglet Aide";

    const gererMaisonTitle = "Comment gérer ma maison ? ";
    const malfonctionnementCapteurTitle  = "Pourquoi on capteur ne fonctionne pas ? ";
    const ajouterCapteurTitle = "Comment ajouter un capteur ? ";
    const malfonctionnementActionneurTitle = "Pourquoi mon actionneur ne fonctionne plus ? ";
    const ajouterActionneurTitle = "Comment ajouter un actionneur ? ";
    const informationSecurityTitle = "Comment mes informations sont-elles sécurisées ? ";
    const serviceClientTitle = "Comment contacter le service client ? ";
}

class forum{

    const title2 = "Poser sa question";
    const sujet = "Sujet";
    const technique = "Problème technique (capteurs, site internet, connexion, installation,...";
    const conseil = "Conseils & Astuces, demander des conseils pour optimiser la gestion de vos capteurs";
    const entreprise = "Questions Entreprise, pour les solutions destinées aux entreprises";
    const other = " Autres, pour toutes autres questions ne rentrant pas dans les précédents choix";

    const numeroClient = "Votre numéro client : ";
    const adresseEmail = "Votre adresse mail : ";
    const pseudo = " Pseudo : ";
    const pseudoPlacefolder = "Votre pseudo";
    const message = "Message : ";
    const messagePlaceholder = "Tapez votre message ici";
    const buttonSubmit = "Envoyer";

    const title3 = "Observer les questions déjà posées";
    const presentationForum = "Vous pouvez répondre lire les questions ci-dessous. Attention à ne pas répéter régulièrement la même question et faites un tour sur la FAQ avant !";


    const numeroCommentaireForum = " Numéro du commentaire ";
    const numeroClientForum = "Numéro Client ";
    const pseudoForum = "Pseudo";
    const mailForum = "Adresse mail";
    const sujetForum = "Sujet";
    const dateForum = "Date de publication ";

    const boutton = "Retour à la page d'acceuil";

    const administratorAnswer = "L'administrateur n'a pas encore répondu à ce commentaire, il répondra bientôt ! ";


}
?>