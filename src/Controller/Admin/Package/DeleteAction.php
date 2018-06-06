<?php declare(strict_types=1);

namespace App\Controller\Admin\Package;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DeleteAction
{
    
    /**
     * @Route("admin/api/package/{packageId}.{_format}",methods={"DELETE"})
     * @param int $packageId
     * @return Response
     */
    public function __invoke(int $packageId): Response
    {
        return new Response("OK");
    }
    
}
