<?php 

class UserController extends BaseController{

    public function profile(){
        $this->set('user', $_SESSION['USER']);
        $this->set('IsMyUser', true);
        echo $this->tmp->render('pages/profile/index.html.twig', $this->data);
    }

    public function getUser($id = null){
        $model = new UserModel();
        $this->set('IsMyUser', false);
        $this->set('user', $model->getInfoFrom($id));
        echo $this->tmp->render('pages/home/index.html.twig', $this->data);
    }

    public function register(){
        $user = $_POST;
        $nick = explode('@', $user['email']);
        $nick = $nick[0];
        $user['username'] = $nick;
        $user['id'] = md5(uniqid($nick));
        $user['password'] = md5($user['password'] . $user['username']);
        
        $model = new UserModel();
        $model->register($user);
    }

    public function login(){

        $_POST['password'] = md5(
            $_POST['password'] . explode('@', $_POST['email'])[0]
        );

        $model = new UserModel();
        $data = $model->login($_POST);
        $_SESSION['USER'] = $data;
        header('Location: /profile');
    }
}

Router::get('/user/{id}', 'UserController@getUser');
Router::get('/profile', 'UserController@profile');
Router::post('/user/register', 'UserController@register');
Router::post('/user/login', 'UserController@login');