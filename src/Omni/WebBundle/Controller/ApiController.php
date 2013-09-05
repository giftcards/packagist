<?php
namespace Omni\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Packagist\WebBundle\Controller\ApiController as PackagistApiController;

class ApiController extends PackagistApiController
{
    /**
     * @Route("/api/stash", name="stash_postreceive", defaults={"_format" = "json"})
     * @Method({"POST"})
     */
    public function stashPostReceive(Request $request)
    {
        /*
        // decode Bitbucket's POST payload
        $payload = json_decode($request->request->get('payload'), true);
    
        if (!$payload || !isset($payload['canon_url']) || !isset($payload['repository']['absolute_url'])) {
            return new Response(json_encode(array('status' => 'error', 'message' => 'Missing or invalid payload',)), 406);
        }
    
        $urlRegex = '{^(?:https?://|git://|git@)?(?P<host>bitbucket\.org)[/:](?P<path>[\w.-]+/[\w.-]+?)(\.git)?/?$}';
        $repoUrl = $payload['canon_url'].$payload['repository']['absolute_url'];
    
        return $this->receivePost($request, $repoUrl, $urlRegex);
        */
    }
}
