<?php 

define("FACILITIES",array(
    array(("eng") =>"kitchens","Cuisine"),
    array(("eng") =>"bathrooms","Salle de bain"),
    array(("eng") =>"toilets","Toilette"),
    array(("eng") =>"bedrooms","Chambre"),
    array(("eng") =>"living_rooms","Salon"),
    array(("eng") =>"storage_rooms","Piéces de stockage"),
));


define("CONFORTS",array(
    array(("eng") =>"home_automation","Domotique"),
    array(("eng") =>"water_softener","Adoucisseur d'eau"),
    array(("eng") =>"fireplace","Cheminée"),
    array(("eng") =>"walk_in_closet","Dressing"),
    array(("eng") =>"home_cinema","Home cinema"),
    array(("eng") =>"wine_cellar","Cave à vin"),
    array(("eng") =>"sauna","Sauna"),
    array(("eng") =>"fitness_room","Salle de sport"),
    array(("eng") =>"furnished","Meublé"),
));

define("ECOLOGY",array(
    array(("eng") =>"double_glazing","
    double vitrage"),
    array(("eng") =>"solar_panels","
    panneaux solaires"),
    array(("eng") =>"solar_boiler","
    chaudière solaire"),
    array(("eng") =>"rainwater_harvesting","
    récupération des eaux pluviales"),
    array(("eng") =>"insulated_roof","
    toit isolé"),
));

define("AMENITIES",array(
    array(("eng") =>"pool","Piscine"),
    array(("eng") =>"basement","Sous-sol"),
    array(("eng") =>"terrace","Terrasse"),
    array(("eng") =>"garden","Jardin"),
    array(("eng") =>"parking","Parking"),
    array(("eng") =>"lift","Ascenseur"),
    array(("eng") =>"cooling_room","Chambre froide"),
    array(("eng") =>"display_window","Étalage"),
    array(("eng") =>"reception_area","Espace de reception"),
    array(("eng") =>"waiting_area","Espace d'attente"),
    array(("eng") =>"guesthouse","Maison d'hôtes"),
    array(("eng") =>"attic","Grenier"),
    array(("eng") =>"water_access","Accès à l'eau"),
    array(("eng") =>"sewer_access","Accés égouts"),
    array(("eng") =>"drainage","drainage"),
    array(("eng") =>"road_access","Accès routier"),
    array(("eng") =>"print_and_copy_area","Zone d'impression et de copie"),
    array(("eng") =>"server_room","Salle des serveurs"),
    array(("eng") =>"storage_space","Espace de stockage"),
    array(("eng") =>"electrical_gate","Portail électrique"),
    array(("eng") =>"manual_gate","Portail manuel"),
    array(("eng") =>"fenced","Cloture"),
    array(("eng") =>"remote_control","Télécommande"),
    array(("eng") =>"key_card","Carte clé"),
    array(("eng") =>"code","Code"),
    array(("eng") =>"climate_control","Climatisation"),
));

define("ORIENTATION",array(
    array(("eng") =>"N","Nord"),
    array(("eng") =>"NE","Nord-Est"),
    array(("eng") =>"E","Est"),
    array(("eng") =>"SE","Sud-Est"),
    array(("eng") =>"S","Sud"),
    array(("eng") =>"SW","Sud-Ouest"),
    array(("eng") =>"W","Ouest"),
    array(("eng") =>"NW","Nord-Ouest"),
));

define("ENERGY",array(
    array(("eng") =>"gas","gaz"),
    array(("eng") =>"fuel","fouil"),
    array(("eng") =>"electricity","electricité"),
    array(("eng") =>"heat_pump","pompe à chaleur"),
));

define("SUBTYPE",array(
    array(("eng") =>"semi-detached","?????"),
    array(("eng") =>"detached","?????"),
    array(("eng") =>"terraced","?????"),
    array(("eng") =>"bungalow","bungalow"),
    array(("eng") =>"condo","condo"),
    array(("eng") =>"loft","loft"),
    array(("eng") =>"duplex","duplex"),
    array(("eng") =>"penthouse","penthouse"),
    array(("eng") =>"student_accommodation","logement étudiant"),
    array(("eng") =>"healthcare","médical"),
    array(("eng") =>"industrial","industriel"),
    array(("eng") =>"leasure_and_sport","loisir et sport"),
    array(("eng") =>"restaurant_and_café","restaurant et café"),
    array(("eng") =>"retail","magasin"),
    array(("eng") =>"shop","boutique"),
    array(("eng") =>"warehouse","entrepot"),
    array(("eng") =>"townhouse","villa"),
    array(("eng") =>"cottage","chalet"),
    array(("eng") =>"mansion","hotel particulier"),
    array(("eng") =>"farm","ferme"),
    array(("eng") =>"investment_property","immeuble de rapport"),
    array(("eng") =>"agricultural","agricole"),
    array(("eng") =>"buildable","constructible"),
    array(("eng") =>"recreational","récréatif"),
    array(("eng") =>"pasture_land","pâturage"),
    array(("eng") =>"coworking","coworking"),
    array(("eng") =>"flex_office","bureau flexible"),
    array(("eng") =>"open_office","open space"),
    array(("eng") =>"private_garage","box fermé"),
    array(("eng") =>"indoor_parking_space","emplacement intérieur"),
    array(("eng") =>"outdoor_parking_space","emplacement extérieur"),
    array(("eng") =>"covered_outdoor_space","espace extérieur couvert"),
));


define("TYPE",array(
    array(("eng") =>"house","maison"),
    array(("eng") =>"apartment","appartement"),
    array(("eng") =>"parking","parking"),
    array(("eng") =>"land","terrain"),
    array(("eng") =>"commercial_property","bien commercial"),
    array(("eng") =>"office","bureau"),
));

define("AREA",array(
    array(("eng") =>"gross",("fr")=>"brute",("unit") =>" m²"),
    array(("eng") =>"plot",("fr")=>"terrain",("unit") =>" m²"),
    array(("eng") =>"display_window",("fr")=>"étalage",("unit") =>" m²"),
    array(("eng") =>"ceiling_height",("fr")=>"hauteur sous plafond",("unit") =>" cm"),
    array(("eng") =>"showroom",("fr")=>"showroom",("unit") =>" m²"),
    array(("eng") =>"manifacturing_area",("fr")=>"espace de production",("unit") =>" m²"),
    array(("eng") =>"storage_room",("fr")=>"espace de stockage",("unit") =>" m²"),
    array(("eng") =>"kitchens",("fr")=>"cuisine",("unit") =>" m²"),
    array(("eng") =>"liveable",("fr")=>"habitable",("unit") =>" m²"),
    array(("eng") =>"living_room",("fr")=>"séjour",("unit") =>" m²"),
    array(("eng") =>"bedrooms",("fr")=>"chambre à coucher",("unit") =>" m²"),
    array(("eng") =>"bathrooms",("fr")=>"salle de bain",("unit") =>" m²"),
    array(("eng") =>"shower_rooms",("fr")=>"salle de douche",("unit") =>" m²"),
    array(("eng") =>"balcony",("fr")=>"balcon",("unit") =>" m²"),
    array(("eng") =>"terrace",("fr")=>"terrasse",("unit") =>" m²"),

));

?>