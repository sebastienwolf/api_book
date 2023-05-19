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
              "longitude": 5.098634,
              "latitude": 43.641548
            },
            {
              "id": "2",
              "longitude": 5.096327,
              "latitude": 43.641942
            },
            {
              "id": "3",
              "longitude": 5.090987,
              "latitude": 43.636759
            },
            {
              "id": "4",
              "longitude": 5.100215,
              "latitude": 43.634820
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
              "longitude": 5.098634,
              "latitude": 43.641548
            },
            {
              "id": "2",
              "longitude": 5.096327,
              "latitude": 43.641942
            },
            {
              "id": "3",
              "longitude": 5.090987,
              "latitude": 43.636759
            },
            {
              "id": "4",
              "longitude": 5.100215,
              "latitude": 43.634820
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
            "id_spot": "2"
            },
            {
            "id": "2",
            "auteur": "Sarah Johnson",
            "name": "Whispering Shadows",
            "id_spot": "1"
            },
            {
            "id": "3",
            "auteur": "Michael Brown",
            "name": "Ethereal Essence",
            "id_spot": "3"
            },
            {
            "id": "5",
            "auteur": "Jessica Anderson",
            "name": "Silent Serenade",
            "id_spot": "4"
            },
            {
            "id": "6",
            "auteur": "David Wilson",
            "name": "Enchanted Whispers",
            "id_spot": "1"
            },
            {
            "id": "7",
            "auteur": "Sophia Lee",
            "name": "Veiled Harmony",
            "id_spot": "2"
            },
            {
            "id": "8",
            "auteur": "Daniel Taylor",
            "name": "Mystical Rhapsody",
            "id_spot": ""
            },
            {
            "id": "9",
            "auteur": "Olivia Martinez",
            "name": "Lost Melody",
            "id_spot": ""
            },
            {
            "id": "10",
            "auteur": "Ethan Davis",
            "name": "Echoes of Twilight",
            "id_spot": ""
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
    

    #[Route('/api/user/{user}', name: 'user_api')]
    public function getUserId($user): Response
    {
        $data = json_decode('[
            {
                "id": "5f674d8",
                "nom": "Dupont",
                "prenom": "Jean"
            },
            {
                "id": "41s75a3",
                "nom": "Martin",
                "prenom": "Sophie"
            },
            {
                "id": "5g7x962",
                "nom": "Lefebvre",
                "prenom": "Pierre"
            },
            {
                "id": "d54d12q4",
                "nom": "Moreau",
                "prenom": "Julie"
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
