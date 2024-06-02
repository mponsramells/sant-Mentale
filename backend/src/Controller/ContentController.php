<?php

namespace App\Controller;

use Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/content")
 */
class ContentController extends AbstractController
{
    /**
     * @Route("/add", name="add_content", methods={"POST"})
     */
    public function addContent(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $content = new Content();
        $content->setTitle($data['title']);
        $content->setDescription($data['description']);
        $content->setFilePath($data['filePath']);

        $em->persist($content);
        $em->flush();

        return new JsonResponse(['status' => 'Content created'], Response::HTTP_CREATED);
    }

    /**
     * @Route("/edit/{id}", name="edit_content", methods={"PUT"})
     */
    public function editContent(Request $request, EntityManagerInterface $em, $id): JsonResponse
    {
        $content = $em->getRepository(Content::class)->find($id);
        if (!$content) {
            return new JsonResponse(['status' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        $content->setTitle($data['title'] ?? $content->getTitle());
        $content->setDescription($data['description'] ?? $content->getDescription());
        $content->setFilePath($data['filePath'] ?? $content->getFilePath());

        $em->flush();

        return new JsonResponse(['status' => 'Content updated'], Response::HTTP_OK);
    }

    /**
     * @Route("/delete/{id}", name="delete_content", methods={"DELETE"})
     */
    public function deleteContent(EntityManagerInterface $em, $id): JsonResponse
    {
        $content = $em->getRepository(Content::class)->find($id);
        if (!$content) {
            return new JsonResponse(['status' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($content);
        $em->flush();

        return new JsonResponse(['status' => 'Content deleted'], Response::HTTP_OK);
    }

    /**
     * @Route("/get/{id}", name="get_content", methods={"GET"})
     */
    public function getContent(EntityManagerInterface $em, $id): JsonResponse
    {
        $content = $em->getRepository(Content::class)->find($id);
        if (!$content) {
            return new JsonResponse(['status' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($content->toArray());
    }

    /**
     * @Route("/get/multiple", name="get_multiple_contents", methods={"POST"})
     */
    public function getMultipleContents(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $ids = json_decode($request->getContent(), true);
        $contents = $em->getRepository(Content::class)->findBy(['id' => $ids]);

        return new JsonResponse(array_map(function ($content) {
            return $content->toArray();
        }, $contents));
    }

    /**
     * @Route("/get/all", name="get_all_contents", methods={"GET"})
     */
    public function getAllContents(EntityManagerInterface $em): JsonResponse
    {
        $contents = $em->getRepository(Content::class)->findAll();
        return new JsonResponse(array_map(function ($content) {
            return $content->toArray();
        }, $contents));
    }
}
