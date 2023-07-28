<?php

namespace App\Controller;

use App\Entity\Cat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CatsController extends AbstractController
{
    #[Route('/cats', name: 'app_cats', methods: ['POST'])]
    public function createCat(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $requestArray = $request->toArray();

        $cat = new Cat();
        $cat->setName($requestArray['name']);
        $cat->setBreed($requestArray['breed']);
        $cat->setAge($requestArray['age']?? null);
        $cat->setColor($requestArray['color'] ?? null );
        $cat->setWeight($requestArray['weight'] ?? null);
        $violations =  $validator->validate($cat);
        if(count($violations) > 0 ){
            return $this->json($violations);
        }

        return $this->json($cat);
    }
}
