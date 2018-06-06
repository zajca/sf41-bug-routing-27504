<?php declare(strict_types=1);

namespace App\Controller\Admin\Lists;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class UpdateItemAction
{
    
    /**
     * @Route("admin/api/list/{shortClassName}/{id}.{_format}",
     *     options = {"utf8": true},
     *     methods={"PUT"}
     *     )
     * @param string  $shortClassName
     * @param int     $id
     * @param Request $request
     * @return Response
     */
    public function __invoke(string $shortClassName, int $id, Request $request): Response
    {
        return new Response("OK");
    }
    
}
