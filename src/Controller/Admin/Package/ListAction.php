<?php declare(strict_types=1);

namespace App\Controller\Admin\Package;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\Routing\Annotation\Route;

final class ListAction
{
    
    /**
     * @Route("admin/api/package.{_format}",defaults={ "_format" = "json" },methods={"GET"})
     *
     * @param Request $request
     *
     * @return Response
     * @throws ConflictHttpException
     *
     */
    public function __invoke(Request $request): Response
    {
        return new Response("OK");
    }
    
}
