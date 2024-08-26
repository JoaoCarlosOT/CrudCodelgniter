<?php

namespace App\Controllers;

use App\Models\Clientes;
use Config\Services;

class ClientesController extends BaseController
{
    protected $clientesModel;

    public function __construct()
    {
        $this->clientesModel = Services::clientesModel(); 
        // service para instanciar a classe clientes
    }

    public function index()
    {
        $clientes['clientes'] = $this->clientesModel->findAll();

        return view('partils/head')
            . view('header')
            . view('home', $clientes) 
            . view('partils/foot');
    }

    public function create()
    {
        return view('partils/head')
            . view('header')
            . view('create') 
            . view('partils/foot');
    }

    public function insert()
    {
        $validation = service('validation');

        $validation->setRules([
            'cliente' => 'required|min_length[3]',
            'empresa' => 'required|max_length[255]',
            'email' => 'required|min_length[3]',
            'telefone' => 'required|max_length[255]',
            'cpf_cnpj' => 'required|min_length[3]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'cliente' => $this->request->getPost('cliente'),
            'empresa' => $this->request->getPost('empresa'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'cpf_cnpj' => $this->request->getPost('cpf_cnpj'),
        ];

        $this->clientesModel->save($data);

        return redirect()->to('/')->with('message', 'Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $data['clientes'] = $this->clientesModel->find($id);

        if (!$data['clientes']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('partils/head')
            . view('header')
            . view('update', $data) 
            . view('partils/foot');
    }

    public function update($id)
    {
        $this->clientesModel->update($id, [
            'cliente' => $this->request->getPost('cliente'),
            'empresa' => $this->request->getPost('empresa'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'cpf_cnpj' => $this->request->getPost('cpf_cnpj'),
        ]);

        return redirect()->route('home')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function delete($id)
    {
        $this->clientesModel->delete($id);

        return redirect()->to('/')->with('message', 'Cliente excluído com sucesso!');
    }

    public function details($id)
    {
    $data['clientes'] = $this->clientesModel->find($id);

    if (!$data['clientes']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('partils/head')
        . view('header')
        . view('details', $data)
        . view('partils/foot');
    }

    public function search()
{
    $query = $this->request->getGet('q');

    if (empty($query)) {
        return redirect()->route('home');
    }

    $clientes['clientes'] = $this->clientesModel
        ->like('cliente', $query)
        ->orLike('empresa', $query)
        ->orLike('email', $query)
        ->orLike('telefone', $query)
        ->orLike('cpf_cnpj', $query)
        ->findAll();

    return view('partils/head')
        . view('header')
        . view('home', $clientes)
        . view('partils/foot');
}
}
