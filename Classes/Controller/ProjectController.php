<?php

declare(strict_types=1);


namespace WEBcoast\ProjectTimeline\Controller;


use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use WEBcoast\ProjectTimeline\Domain\Repository\ProjectRepository;

class ProjectController extends ActionController
{
    public function __construct(protected readonly ProjectRepository $projectRepository)
    {
    }

    public function listAction(): ResponseInterface
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);

        return $this->htmlResponse();
    }
}
