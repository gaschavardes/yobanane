<?PHP
//On récupere les valeurs du formulaire

$destinataire = $_POST['destinataire'];
$adresse_dest = $_POST['adresse_dest'];
$email_client = $_POST['email_client'];
$message      = $_POST['message'];
$bananamood   = $_POST['bananamood'];

echo $_POST['bananamood'];
//Connexion à la base de donnée

$bdd = "yobanane";
$host = "localhost" ;
$user = "root" ;
$mdp = "root" ;

$connect = mysql_connect($host, $user, $mdp) ;

if ($connect > 0 )

echo " connexion réussie" ;

else

echo "Echec de connexion – Veuillez contacter l’adminstrateur" ;

mysql_select_db($bdd) or die("Erreur de connexion à la base de donnée" );


//On insère les informations du formulaire dans la table


$sql = "INSERT INTO commandes (destinataire,adresse_dest,email_client,message,bananamood)
VALUES ('$destinataire','$adresse_dest','$email_client','$message','$bananamood')";

if ($result === FALSE) {
       echo "La requête INSERT a échoué.";
       echo $result;
    
   } else {
       echo "Un nouveau nom a été ajouté dans la table commandes";
       echo $result;
   }






//Stripe
 require_once('init.php');

 // Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_jhYHZ4zXU7KSxouoOlo2oP7Z");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 500, // amount in cents, again
    "currency" => "eur",
    "source" => $token,
    "description" => "Example charge"
    ));
  $result = mysql_query($sql)or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
?>

