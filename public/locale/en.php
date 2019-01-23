<?php
class base{
const websiteName = "SweetHouse";
}
class header{
const home = "Home";
const register= "Register";
const login = "Login";
const help = "Help";
const faq = "FAQ";
const forum = "Forum";
const contact = "Contact us !";
const houseControl = "House Management";
const profileControl = "Profile Management";
const adminManagement = "Admin Management";
const adminProfil = "Admin Profil";
const logout = "Logout";
const shop= "Shop";
const forumAdministrateur = "Administrator Forum";
const technicianProfileControl = "Technician Profile";
const technicianHouseControl = "Technician House";
const technicianRdv = "Technician Calendar";
const technicianForum = "Technician Forum";
const gestionCapteurs = "Sensor Control";
}
class footer{
const copyright = "©SweetHouse 2018";
}
class modalContact{
const pageName = "Contact-us";
const contactFacebook = "Our Facebook";
const contactTwitter = "Our Twitter";
const contactInstagram = "Our Instagram";
const contactEmail = "Our support email adress";
}
class register{
const pageName = "Register";
const inputFirstName = "First name :";
const inputLastName = "Last name :";
const inputAge = "Age :";
const inputPassword = "Password :";
const inputPasswordConfirm = "Confirm Password :";
const inputGender = "Gender :";
const optionGenderMale = "Male";
const optionGenderFemale = "Female";
const inputType = "Type :";
const optionTypeIndividual = "Individual";
const optionTypeProfessional = "Professional";
const inputEmail = "Email adress :";
const inputPhone = "Phone number :";
const inputAdress = "Adress :";
const inputZipCode = "Zipcode :";
const inputCity = "City :";
const inputCountry = "Country :";
const optionCountryFrance = "France";
const optionCountryCanada = "Canada";
const optionCountrySpain = "Spain";
const inputCGU = "Accept the GTU :";
const inputSubmit = "Submit";
}
class login{
const pageName = "Login";
const inputEmail = "Your email adress :";
const inputPassword = "Your password :";
const inputRemember = "Remember me :";
const inputSubmit = "Submit";
const inputForgot = "Forgot your password ?";	
}
class forgotPassword{
const pageName = "Forgot your password";
const inputEmail = "Your email adress :";
const inputSubmit = "Submit";
}
class resetPassword{
const pageName = "Reset your password";
const inputPassword = "New password :";
const inputPasswordConfirm = "Confirm new password :";
const inputSubmit = "Submit";
}
class error404{
const pageName = "Error 404";
const message = "This page doesn't exist !";
}
class download{
const pageName = "Download File";	
}
class emptyPage{
const pageName = "";	
}
class profile{
const pageName = "User Profile";
const profileMan = " Profile Management";
const modifyHome= " Change your home adress :";
const modifyWork= " Change your work adress :";
const modifyName= " Change your last-name :";
const modifySurname= " Change your first-name :";
const modifySex= " Change your gender :";
const contact= " Contact your technician :";
const delAcc= " Delete your account : ( Write 'YES' if you want to delete your account ) ";
const infosGen= " General Informations";
const hello = "Hello";
const domHouse="Your domotic places :";
const house=" House :";
const work= " Workplace :";
const tech=" No technical problems";
const intrus= " No intrusions";
const suppAcc="Account deleted in less than 7 days";
const del="Modify";
const man="man";
const woman="woman";
const other="other";
const modifyMail= " Change your mail :";
const modifyNumero= " Change your phone number :";
const modifyPassword= "Enter your old password :";
const modifyPassword2= "Enter your new password :";
const today="Today :";
const thereIs="There are";
const newQ="new questions in the forum";
const uHave="You have";
const houseManage="houses to manage";
const probManage="problems to manage";
const newH="new Houses";
const buy="purchases in the shop";
}

class shop{
const pageName = "Shop";
const addSensors= "Add_sensors";
const livingRoom= "Living Room";
const room= "Room";
const kitchen= "kitchen";
const bathroom= "Bathroom";

}

class GestionCapteurs{
const pageName = "Sensors Management";
const Sensors= "Sensors";
const livingRoom= "Living Room";
const room= "Room";
const kitchen= "Kitchen";
const bathroom= "Bathroom";

}

class faq {
    const title = "Classical questions and FAQ";
    const presentationFAQ = "In this Frequently Asked Questions you will be able to find all the classic questions that users can ask themselves about the use of the sensor management platform or the sensors themselves. A Forum is also available to users in the event that the answer to users' questions is not already mentioned in the FAQ. The platform administrators will take care to update the questions in the FAQ to adapt to the most frequently asked questions. Nevertheless, we are quite open to the suggestion of recurring questions that other users might come to ask. Do not hesitate to contact us through the Contact Us tab, we will do our best to answer you in a shorter time.";
    const gererMaison = "The Sweet House platform is here to offer you a complete management of your domotized house as well as all the sensors that you could have in this house. Sensor management is available via the Sensors Management tab where you can find all the sensors in your home with the ability to change the status of them.";
    const malfonctionnementCapteur = "The most common reason for a sensor malfunction is a battery problem. So be sure to check if the lights on your sensor are on. If this is not the case, try to replace the batteries of your sensor by taking care of arranging them in the correct direction. If despite this attempt the sensor still does not work, you can make an appointment with a technician so that it replaces your sensor as soon as possible. Otherwise, you can of course go through the shop to order a new sensor.";
    const ajouterCapteur = "To add a sensor, a request to the administrator is required. Indeed, the installation of sensors is managed by the administrator to avoid any overloading of the platform. So you can contact him in different ways and he will answer you as soon as possible. An appointment with a technician will be necessary later if the installation of a sensor is necessary.";
    const malfonctionnementActionneur = "To answer this question, we invite you to refer to the section \"Why my sensor no longer works\".";
    const ajouterActionneur = "To answer this question we invite you to refer to the section \"How to add an option\".";
    const informationSecurity = "All of your information is contained in a secure server physically and technologically within DomIsep premises. The developers of the Sweet House platform have implemented many security protocols so that only you and the administrator linked to your account is the only master of your information. Your password has been encrypted within the database and all personal data is protected by our Terms of Use that this information will not be used for purposes other than the domestication of your account. House. If you have any questions about this, do not hesitate to contact an administrator via the \"Contact Us\" tab.";
    const serviceClient = "All information for the customer service contact is contained in the Contact Us tab on the Help tab";

    const gererMaisonTitle = "How to manage my house ?";
    const malfonctionnementCapteurTitle  = "Why does not sensor work ?";
    const ajouterCapteurTitle = "How to add a sensor ?";
    const malfonctionnementActionneurTitle = "Why does my actuator not work anymore ?";
    const ajouterActionneurTitle = "How to add an actuator ?";
    const informationSecurityTitle = "How is my information secure ?";
    const serviceClientTitle = " How to contact the customer service ? ";
}

class forum{

    const title2 = "Ask your question";
    const sujet = "Subject";
    const technique = "Technical problem (sensors, website, connection, installation, ...)";
    const conseil = "Tips & Tricks, ask for tips to optimize the management of your sensors";
    const entreprise = "Business Questions, for business solutions";
    const other = "Others, for all other questions that do not fit into the previous choices";

    const numeroClient = "Your customer number : ";
    const adresseEmail = "Your email adress : ";
    const pseudo = " Pseudo : ";
    const pseudoPlacefolder = "Your pseudo";
    const message = "Message : ";
    const messagePlaceholder = "Type your message here";
    const buttonSubmit = "Send";

    const title3 = "Observe questions already asked";
    const presentationForum = "You can answer read the questions below. Be careful not to repeat the same question regularly and take a look at the FAQ before!";


    const numeroCommentaireForum = " Comment number ";
    const numeroClientForum = "Client number";
    const pseudoForum = "Pseudo";
    const mailForum = " Email adress";
    const sujetForum = "Subject";
    const dateForum = "Publication date ";

    const boutton = "Back to the homepage";

    const administratorAnswer = "The administrator has not yet replied to this comment, he will reply soon!";

}

class forumAmdmin{
    const button ="Back to the homepage";
    const title ="Answer users' questions";
    const numeroCommentaire ="Enter the number of the comment you want to answer:";
    const reponseAdmin ="Administrator response :";
    const submit ="Submit";
    const numeroCommentaireForumAdmin ="Comment number";
    const numeroClientForumAdmin = "Client number";
    const pseudoForumAdmin = "Pseudo";
    const mailForumAdmin ="Email adress";
    const subjectForumAdmin ="Subject";
    const dateForumAdmin ="Publication date";
    const adminAnswerForumAdmin = "The administrator has not yet responded to this comment, he will respond as soon as possible!";
    const supprimerCommentaireForumAdmin = "Click on the box if you want to delete this comment";
}

class rdv{
    const monday="Monday";
    const tuesday="Tuesday";
    const wednesday="Wednesday";
    const thursday="Thursday";
    const friday="Friday";
    const saturday="Saturday";
    const sunday="Sunday";
    const hour="Hour :";
    const day="Day :";
    const reason="Reason :";
    const userId="User Id";
    const addRdv="Add appointment";
}
?>