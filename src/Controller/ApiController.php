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
    #[Route('/api/spot/{spot}', name: 'spot_api')]
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

    #[Route('/api/spot/', name: 'spot_api')]
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
              "auteur": "John Doe",
              "name": "The Great Book",
              "id_spot" : "1"
            },
            {
              "id": "2",
              "auteur": "Jane Smith",
              "name": "Fantastic Adventures",
              "id_spot" : "1"
            },
            {
              "id": "3",
              "auteur": "James Johnson",
              "name": "Mystery Unveiled",
              "id_spot" : "2"
            },
            {
              "id": "4",
              "auteur": "Emily Davis",
              "name": "The Enigma",
              "id_spot" : ""
            }
          ]', true);

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
