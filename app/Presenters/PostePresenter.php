<?php

namespace App\Presenters;
use Nette;
use Nette\Application\UI\Form;

class PostPresenter extends Nette\Application\UI\Presenter
{
    private $database;

    public function _construct(Nette\Database\Context $database)
    {
        $this->database=$database;
    }
    public function renderShow(int $postId): void
    {
        $this->template->post = $this->database->table('posts')->get($postId);
    }
}