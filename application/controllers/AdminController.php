<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction() {

		if (isset($_SESSION['admin'])) {
			$this->view->redirect('admin/add');
		}
        if (!empty($_POST)) {
            if (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('error', 'Логин или пароль указан неверно');
            }
            $this->model->login($_POST['login']);
            $this->view->location('admin/add');
        }
        $this->view->render('Вход');
	}

    public function addAction() {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->postAdd($_POST);
            if ($id == true) {
                $this->model->filesAdd($id);
                $this->view->message('success', 'Пост добавлен');
            }
        }
        $this->view->render('Добавить пост');
    }

	public function editAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->postEdit($_POST, $this->route['id']);

			$this->view->message('success', 'Сохранено');
		}
		$vars = [
			'data' => $this->model->postData($this->route['id'])[0],
		];
		$this->view->render('Редактировать пост', $vars);
	}

	public function deleteAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('admin/posts');
	}

	public function logoutAction() {
        session_start();
        unset($_SESSION['admin']);
        session_destroy();
        session_write_close();
		$this->view->redirect('admin/login');
	}

	public function postsAction() {
		$mainModel = new Main;
		$pagination = new Pagination($this->route, $mainModel->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->postsList($this->route),
		];
		$this->view->render('Посты', $vars);
	}

	public function adminsAction(){
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->usersCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->usersList($this->route),
        ];
    $this->view->render('Администраторы',$vars);
    }

    public function editusersAction(){
        if (!$this->model->isUsersExists($this->route['id'])) {
            $this->view->errorCode(404);
        }elseif (!empty($_POST)) {
            $this->model->usersEdit($_POST, $this->route['id']);
            $this->view->message('success', 'Сохранено');
        }
        $vars = [
            'data' => $this->model->usersData($this->route['id'])[0],
        ];
        $this->view->render('Редактировать пользователей', $vars);
    }

    public function deleteusersAction()
    {
        if (!$this->model->isUsersExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
            $this->model->usersDelete($this->route['id']);
            $this->view->redirect('admin/admins');
    }

    public function registerAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            } elseif (!$this->model->checkLoginExists($_POST['login'])) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->register($_POST);
            $this->view->message('success', 'Регистрация завершена!');
        }
        $this->view->render('Регистрация');
    }
}