<?php

namespace App\Controllers;
use App\Models\Usuario_Model; // Asegúrate de que el modelo esté correctamente referenciado
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create() 
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/usuario/sign_in'); // Asumo que este es el nombre de la vista del formulario
        echo view('front/footer_view');
    }

    public function formValidation() 
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'username' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ],);
            $formModel = new usuario_Model();
        if (!$input){
            // Validación fallida
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/usuario/sign_in', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            // Validación exitosa
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            // Establecer flashdata para el mensaje de éxito
            session()->setFlashdata('success', 'Usuario registrado con éxito');

            // Redirigir al usuario a la página de login
            return $this->response->redirect('/login');
        }
    }
}
