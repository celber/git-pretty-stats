<?php
namespace PrettyGit;

class RepositoryList
{
    /** @var \PHPGit_Repository */
    public $gitWrapper;

    public $path;

    /**
     * @param string $path Path to repositories
     * @return void
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getRepositories ()
    {
        $repositories = array();

        if ($handle = opendir($this->path)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry == '.' || $entry == '..') {
                    continue;
                }

                try {
                    $gitWrapper = new \PHPGit_Repository(__DIR__ . '/../../' . $this->path . '/' . $entry);
                    $repository = new GitRepository($gitWrapper);
                    $repositories[] = array(
                        'name' => $repository->getName(),
                        'commits' => $repository->countCommitsFromGit(),
                        'branch' => $repository->getGitWrapper()->getCurrentBranch()
                    );
                } catch (Exception $e) {
                    // Not a valid repository
                }
            }
        }

        return $repositories;
    }
}
