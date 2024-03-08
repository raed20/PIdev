<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use App\Form\ProductType;
use App\Form\searchproductType;
use App\Model\SearchDataProduct;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/product/add', name: 'app_product_add')]
    public function add(ManagerRegistry $doctrine, Request $req, SluggerInterface $slugger): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $photo */
            $photo = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('products_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photoname' property to store the PDF file name
                // instead of its contents
                $product->setImage($newFilename);
            }

            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('app_product_all');
        }
        return $this->renderForm('product/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/product/all', name: 'app_product_all')]
    public function getAll(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Product::class);
        $products = $repo->findAll();
        return $this->render('product/list.html.twig', [
            'list' => $products,
            'products' => $products,
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_show')]
    public function showProductById(int $id, ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Product::class);
        $product = $repo->find($id);

        if (!$product) {
            throw new NotFoundHttpException('Product not found');
        }

        return $this->render('front_office/product.html.twig', [
            'product' => $product,
        ]);
    }




    #[Route('/shop', name: 'app_products_all')]
    public function getAllProducts(ProductRepository $repository, ManagerRegistry $doctrine, Request $request): Response
    {
        $searchData = new SearchDataProduct();
        $form = $this->createForm(searchproductType::class, $searchData);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $searchData->page = $request->query->getInt('page', 1);
            $products = $repository->findBySearch($searchData);

            return $this->render('front_office/index.html.twig', [
                'form' => $form->createView(),
                'products' => $products
            ]);
        }
        $repo = $doctrine->getRepository(Product::class);
        $products = $repo->findAll();
        return $this->render('front_office/index.html.twig', [
            'products' => $products,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/product/edit/{ref}', name: 'app_edit_product')]
    public function edit(ProductRepository $repository, $ref, Request $request, ManagerRegistry $doctrine)
    {
        $product = $repository->find($ref);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_product_all");
        }

        return $this->renderForm('product/add.html.twig', [
            'myForm' => $form,
        ]);
    }

    #[Route('/product/delete/{ref}', name: 'app_delete_product')]
    public function delete($ref, ProductRepository $repository, ManagerRegistry $doctrine)
    {
        $product = $repository->find($ref);
        $em = $doctrine->getManager();
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('app_product_all');
    }
    #[Route('/product/{id}/add-to-cart', name: 'app_product_add_to_cart')]
    public function addToCart(int $id, Request $request, ManagerRegistry $doctrine, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);

        if (!$product) {
            throw new NotFoundHttpException('Product not found');
        }

        $quantity = $request->request->getInt('quantity', 1);

        if ($quantity < 1) {
            $this->addFlash('error', 'Quantity cannot be less than 1.');
            return $this->redirectToRoute('app_product_show', ['id' => $product->getId()]);
        }

        // Create a new Panier entity and set product and quantity
        $panier = new Panier();
        $panier->setProduct($product);
        $panier->setQuantity($quantity);

        $em = $doctrine->getManager();
        $em->persist($panier);
        $em->flush();

        $this->addFlash('success', 'Product added to cart!');
        return $this->redirectToRoute('app_products_all', ['id' => $product->getId()]);
    }
}
