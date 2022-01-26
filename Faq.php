
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        
    </head>
   

        
   


        
    <body>
        <?php include_once('header.php'); ?>
        

        
        
        

        

        <div class="my-16 max-w-3xl mx-auto px-6 lg:px-0">
            <h1 class="text-center text-3xl sm:text-4xl font-extrabold text-gray-900">Questions Fréquentes</h1>

            <div class="mt-10 space-y-4" >
                <details class="border-2 rounded">
                    <summary class="p-4 font-medium text-lg text-gray-900 cursor-pointer">Comment puis-je chnager de langue ?</summary>

                    <div class="p-4 bg-gray-100 italic">
                        En cliquant sur le menu déroulant du drapeau et en sélectionnant la langue désirée.

                    </div>
                   
                </details>

                <details class="border-2 rounded">
                    <summary class="p-4 font-medium text-lg text-gray-900 cursor-pointer">Que faire si je perds mon mot de passe ?</summary>

                    <div class="p-4 bg-gray-100 italic">
                        Il faudra cliquer sur le lien "Mot de passe oublier ?" et suivre la démarche indiquée.

                    </div>
                   
                </details>

                <details class="border-2 rounded">
                    <summary class="p-4 font-medium text-lg text-gray-900 cursor-pointer">Combien de temps mes données sont-elles conservées ?</summary>

                    <div class="p-4 bg-gray-100 italic">
                    En simple, vos données (Score Confort et les facteurs qui le détermine) ne se
	suppriment jamais toutes seules.
	Dans votre espace personnel, vous avez la possibilité de supprimer vos données
	collectées datant de plus d'1 an, 3 mois, ou 1 jour.
	Pour le Score Confort, il vous faudra un droit de suppression, que vos
	administrateurs peuvent vous procurer.

	En plus de détails :
	A l'exception du mode d'affichage Temps Réel*, les échantillons sont conservés tant
	qu'ils n'ont pas été moyennés pour une échelle supérieure. (cf. tableau ci-bas)
	Une fois moyennés, les échantillons sont définitivement supprimés de nos serveurs.

	<p>---	---	---	---	---	---	---	---	---</p>
	<p>Échelle			Moyenne			Limite Mémoire</p>
	<p>---	---	---	---	---	---	---	---	---</p>
	<p>Sample		||	-		||	600 ou 1199*</p>
	<p>Minute		||	600 samples	||	60</p>
	<p>Horaire		||	60 minutes	||	168</p>
	<p>Hebdomadaire	||	168 horaires	||	24</p>
	<p>Mensuel		||	4 hebdomadaires	||</p>	

	<p>---	---	---	---	---	---	---	---	---</p>

	* Pour l'affichage Temps Réel, une fois que les 600 échantillons sont collectés,
	seul le premier échantillon sera supprimé, afin de garder 600 échantillons à tout
	moment. Tandis que les autres modes d'affichage sont strictement synchronisés à
	l'horloge de nos serveurs. (les 600 échantillons sont supprimés lorsque les
	secondes de nos serveurs passent de 59 à 0)

                    </div>
                   
                </details>

                <details class="border-2 rounded">
                    <summary class="p-4 font-medium text-lg text-gray-900 cursor-pointer">Comment mon Score Confort est-il calculé ?</summary>

                    <div class="p-4 bg-gray-100 italic">
                    Votre Score Confort est calculé en temps réel en fonction des facteurs
	                environnementaux collectionnés par l'appareil, plus certaines informations
	                concernant votre workspace (localisation, nombre d'employés, type de workplace)

	                L'équation est une recette arbitraire établie par nos soins et est améliorée
	                régulièrement en fonction des retours de nos clients.

                    </div>
                   
                </details>

                

            </div>
        

        </div>

        <?php include_once('footer.php'); ?>

             

    </body>
</html> 

