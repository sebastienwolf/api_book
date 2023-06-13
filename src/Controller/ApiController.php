<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use OpenApi\Annotations\Get as OAGet;

class ApiController extends AbstractController
{
/**
  * @Route("/api/spot/{spot}", name="spot_api", methods={"GET"})
 */
    #[Route('/api/spot/{spot}', name: 'spots_api')]
    public function getSpot($spot): Response
    {
        $data = json_decode('[
            {
                "id": "1",
                "name": "Boite de la résistance",
                "longitude": 5.098634,
                "latitude": 43.641548,
                "street": "33 Pl des Martyrs de la Resistance",
                "cp": "13300",
                "city": "Salon-de-Provence"
              },
              {
                "id": "2",
                "name": "Boite des Martyrs",
                "longitude": 5.096327,
                "latitude": 43.641942,
                "street": "33 Place des Martyrs",
                "cp": "13300",
                "city": "Salon-de-Provence"
              },
              {
                "id": "3",
                "name": "Boite des bourrets",
                "longitude": 5.090987,
                "latitude": 43.636759,
                "street": "276 Avenue Paul Bourret",
                "cp": "13300",
                "city": "Salon-de-Provence"
              },
              {
                "id": "4",
                "name": "Boite de Craponne",
                "longitude": 5.100215,
                "latitude": 43.634820,
                "street": "323 Allées de Craponne",
                "cp": "13300",
                "city": "Salon-de-Provence"
              }
          ]', true);

        $desiredId = $spot;
        $desiredObject = null;

        foreach ($data as $item) {
            if ($item['id'] === $desiredId) {
                $desiredObject = $item;
                break;
            }
        }

        if ($desiredObject !== null) {
            return new JsonResponse($desiredObject);
        } else {
            return new JsonResponse(['message' => "Aucun User avec l'ID $desiredId n'a été trouvé."], 404);
        }
    }

    #[Route('/api/spot/', name: 'spots_api')]
    public function getAllSpot(): Response
    {
        $data = json_decode('[
            {
              "id": "1",
              "name": "Boite de la résistance",
              "longitude": 5.098634,
              "latitude": 43.641548,
              "street": "33 Pl des Martyrs de la Resistance",
              "cp": "13300",
              "city": "Salon-de-Provence"
            },
            {
              "id": "2",
              "name": "Boite des Martyrs",
              "longitude": 5.096327,
              "latitude": 43.641942,
              "street": "33 Place des Martyrs",
              "cp": "13300",
              "city": "Salon-de-Provence"
            },
            {
              "id": "3",
              "name": "Boite des bourrets",
              "longitude": 5.090987,
              "latitude": 43.636759,
              "street": "276 Avenue Paul Bourret",
              "cp": "13300",
              "city": "Salon-de-Provence"
            },
            {
              "id": "4",
              "name": "Boite de Craponne",
              "longitude": 5.100215,
              "latitude": 43.634820,
              "street": "323 Allées de Craponne",
              "cp": "13300",
              "city": "Salon-de-Provence"
            }
          ]', true);

            return new JsonResponse($data);
    }

    #[Route('/api/livre/{livre}', name: 'livre_api')]
    public function getLivre($livre): Response
    {
        $data = json_decode('[
            {
                "id": "1",
                "auteur": "John Smith",
                "name": "Mystic Journey",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Un récit captivant rempli d\'aventures mystérieuses et de découvertes surprenantes. Suivez le protagoniste dans son voyage épique à travers des terres inconnues.",
                "image": "http://exemple.com/images/mystic_journey.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "2",
                "auteur": "Sarah Johnson",
                "name": "Whispering Shadows",
                "available_at": "true",
                "id_spot": "1",
                "resume": "Un thriller sombre et palpitant qui plonge le lecteur dans l\'obscurité des ombres murmures. Préparez-vous à être transporté dans un monde rempli de mystères et de secrets inavoués.",
                "image": "http://exemple.com/images/whispering_shadows.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "3",
                "auteur": "Michael Brown",
                "name": "Ethereal Essence",
                "available_at": "true",
                "id_spot": "3",
                "resume": "Une histoire envoûtante qui explore les liens entre le monde réel et le monde des esprits. Plongez dans un univers où la frontière entre réalité et magie s\'estompe.",
                "image": "http://exemple.com/images/ethereal_essence.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "5",
                "auteur": "Jessica Anderson",
                "name": "Silent Serenade",
                "available_at": "true",
                "id_spot": "4",
                "resume": "Une histoire émouvante de l\'amour et de la musique qui transcende les barrières du silence. Laissez-vous porter par les mélodies douces et les émotions profondes de ce récit captivant.",
                "image": "http://exemple.com/images/silent_serenade.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "6",
                "auteur": "David Wilson",
                "name": "Enchanted Whispers",
                "available_at": "true",
                "id_spot": "1",
                "resume": "Un conte enchanteur rempli de magie et de mystère. Découvrez un monde où les chuchotements des fées et des créatures fantastiques éveillent l\'imagination.",
                "image": "http://exemple.com/images/enchanted_whispers.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "7",
                "auteur": "Sophia Lee",
                "name": "Veiled Harmony",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Une romance passionnante qui explore les défis et les obstacles auxquels sont confrontés deux âmes liées par une harmonie voilée. Plongez dans un tourbillon d\'émotions et de dilemmes amoureux.",
                "image": "http://exemple.com/images/veiled_harmony.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "8",
                "auteur": "Daniel Taylor",
                "name": "Mystical Rhapsody",
                "available_at": "false",
                "id_spot": "",
                "resume": "Une symphonie magique qui transporte le lecteur dans un monde de mélodies envoûtantes et de magie inexplicable. Plongez dans les profondeurs de cette rhapsodie mystique.",
                "image": "http://exemple.com/images/mystical_rhapsody.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "9",
                "auteur": "Olivia Martinez",
                "name": "Lost Melody",
                "available_at": "false",
                "id_spot": "",
                "resume": "Une quête émotionnelle à la recherche d\'une mélodie perdue qui détient le pouvoir de guérir les âmes brisées. Suivez les pas de l\'héroïne dans sa recherche de rédemption.",
                "image": "http://exemple.com/images/lost_melody.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "10",
                "auteur": "Ethan Davis",
                "name": "Echoes of Twilight",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Des échos mystérieux de crépuscule qui résonnent à travers les pages de ce roman envoûtant. Plongez dans l\'atmosphère magique où les secrets du passé se mêlent au présent.",
                "image": "http://exemple.com/images/echoes_of_twilight.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              }]', true);

        $desiredId = $livre;
        $desiredObject = null;

        foreach ($data as $item) {
            if ($item['id'] === $desiredId) {
                $desiredObject = $item;
                break;
            }
        }

        if ($desiredObject !== null) {
            return new JsonResponse($desiredObject);
        } else {
            return new JsonResponse(['message' => "Aucun User avec l'ID $desiredId n'a été trouvé."], 404);
        }
    }

    #[Route('/api/livres/spots/{spot}', name: 'livres_spot_api')]
    public function getLivresOnSpot($spot): Response
    {
        $data = json_decode('[
            {
                "id": "1",
                "auteur": "John Smith",
                "name": "Mystic Journey",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Un récit captivant rempli d\'aventures mystérieuses et de découvertes surprenantes. Suivez le protagoniste dans son voyage épique à travers des terres inconnues.",
                "image": "https://static.fnac-static.com/multimedia/Images/FR/NR/85/6f/5c/6057861/1507-0/tsp20171221035904/Mystic-Journey.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "2",
                "auteur": "Sarah Johnson",
                "name": "Whispering Shadows",
                "available_at": "true",
                "id_spot": "1",
                "resume": "Un thriller sombre et palpitant qui plonge le lecteur dans l\'obscurité des ombres murmures. Préparez-vous à être transporté dans un monde rempli de mystères et de secrets inavoués.",
                "image": "https://static.fnac-static.com/multimedia/Images/FR/NR/29/f7/5f/6289193/1507-0/tsp20170808230647/Whispering-Shadows.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "3",
                "auteur": "Michael Brown",
                "name": "Ethereal Essence",
                "available_at": "true",
                "id_spot": "3",
                "resume": "Une histoire envoûtante qui explore les liens entre le monde réel et le monde des esprits. Plongez dans un univers où la frontière entre réalité et magie s\'estompe.",
                "image": "https://m.media-amazon.com/images/I/41mUgUeJo-L._SX311_BO1,204,203,200_.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "5",
                "auteur": "Jessica Anderson",
                "name": "Silent Serenade",
                "available_at": "true",
                "id_spot": "4",
                "resume": "Une histoire émouvante de l\'amour et de la musique qui transcende les barrières du silence. Laissez-vous porter par les mélodies douces et les émotions profondes de ce récit captivant.",
                "image": "https://static.fnac-static.com/multimedia/Images/FR/NR/c8/42/8a/9061064/1507-1/tsp20170921090055/Two-Dialogues-with-Postscript-Serenade-Farewell-Serenade-Silent-Music.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "6",
                "auteur": "David Wilson",
                "name": "Enchanted Whispers",
                "available_at": "true",
                "id_spot": "1",
                "resume": "Un conte enchanteur rempli de magie et de mystère. Découvrez un monde où les chuchotements des fées et des créatures fantastiques éveillent l\'imagination.",
                "image": "https://m.media-amazon.com/images/P/1420872842.01._SCLZZZZZZZ_SX500_.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "7",
                "auteur": "Sophia Lee",
                "name": "Veiled Harmony",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Une romance passionnante qui explore les défis et les obstacles auxquels sont confrontés deux âmes liées par une harmonie voilée. Plongez dans un tourbillon d\'émotions et de dilemmes amoureux.",
                "image": "https://m.media-amazon.com/images/I/51yPBGhNuLL._SX314_BO1,204,203,200_.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "8",
                "auteur": "Daniel Taylor",
                "name": "Mystical Rhapsody",
                "available_at": "false",
                "id_spot": "",
                "resume": "Une symphonie magique qui transporte le lecteur dans un monde de mélodies envoûtantes et de magie inexplicable. Plongez dans les profondeurs de cette rhapsodie mystique.",
                "image": "https://static.fnac-static.com/multimedia/Images/FR/MC/a5/22/20/35660453/1507-1/tsp20180803071553/Death-Comes-To-The-Deconstructionist.jpg#bf8ba011-1b6d-4929-838f-fafeabd0abaa",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "9",
                "auteur": "Olivia Martinez",
                "name": "Lost Melody",
                "available_at": "false",
                "id_spot": "",
                "resume": "Une quête émotionnelle à la recherche d\'une mélodie perdue qui détient le pouvoir de guérir les âmes brisées. Suivez les pas de l\'héroïne dans sa recherche de rédemption.",
                "image": "https://m.media-amazon.com/images/I/41vIrsMmrvL.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              },
              {
                "id": "10",
                "auteur": "Ethan Davis",
                "name": "Echoes of Twilight",
                "available_at": "true",
                "id_spot": "2",
                "resume": "Des échos mystérieux de crépuscule qui résonnent à travers les pages de ce roman envoûtant. Plongez dans l\'atmosphère magique où les secrets du passé se mêlent au présent.",
                "image": "https://m.media-amazon.com/images/I/51SSWEkja2L._SX346_BO1,204,203,200_.jpg",
                "created_at": "2023-05-13 10:30:00",
                "updated_at": "2023-05-13 15:45:00"
              }]', true);

        $desiredId = $spot;
        $desiredObject = null;

        foreach ($data as $item) {
            if ($item['id_spot'] === $desiredId && $item['available_at'] ) {
                $desiredObject = $item;
                break;
            }
        }

        if ($desiredObject !== null) {
            return new JsonResponse($desiredObject);
        } else {
            return new JsonResponse(['message' => "Aucun User avec l'ID $desiredId n'a été trouvé."], 404);
        }
    }
    

    #[Route('/api/user/{user}', name: 'user_api')]
    public function getUserId($user): Response
    {
        $data = json_decode('[
            {
                "id": "c71ae7b11c824b4a",
                "nom": "Dupont",
                "prenom": "Jean",
                "email": "J.Dupont@gmail.com"
            },
            {
                "id": "390b5dd5c3e64d53",
                "nom": "Martin",
                "prenom": "Sophie",
                "email": "M.Sophie@gmail.com"
            },
            {
                "id": "d33e9e891b754eb4",
                "nom": "Lefebvre",
                "prenom": "Pierre",
                "email": "L.Pierre@gmail.com"
            },
            {
                "id": "70567b9f5a6d4f5b",
                "nom": "Moreau",
                "prenom": "Julie",
                "email": "M.Julie@gmail.com"
            }
        ]', true);

        $desiredId = $user;
        $desiredObject = null;

        foreach ($data as $item) {
            if ($item['id'] === $desiredId) {
                $desiredObject = $item;
                break;
            }
        }

        if ($desiredObject !== null) {
            return new JsonResponse($desiredObject);
        } else {
            return new JsonResponse(['message' => "Aucun User avec l'ID $desiredId n'a été trouvé."], 404);
        }
    }
}
