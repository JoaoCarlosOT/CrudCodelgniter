<?php

namespace App\Controllers;

use App\Models\Posts;

class PostsController extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new Posts();
    }

    public function index()
    {
        $posts['posts'] = $this->postModel->findAll();

        return view('partils/head')
            . view('header')
            . view('home', $posts) 
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
            'title' => 'required|min_length[3]',
            'description' => 'required|max_length[255]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $this->postModel->save($data);

        return redirect()->to('/')->with('message', 'Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $data['post'] = $this->postModel->find($id);

        if (!$data['post']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('partils/head')
            . view('header')
            . view('update', $data) 
            . view('partils/foot');
    }

    public function update($id)
    {
        $this->postModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->route('home')->with('message', 'Post atualizado com sucesso!');
    }

    public function delete($id)
    {
        $this->postModel->delete($id);

        return redirect()->to('/')->with('message', 'Post excluído com sucesso!');
    }

    public function details($id)
    {
    $data['post'] = $this->postModel->find($id);

    if (!$data['post']) {
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

    $posts['posts'] = $this->postModel
        ->like('title', $query)
        ->orLike('description', $query)
        ->findAll();

    return view('partils/head')
        . view('header')
        . view('home', $posts)
        . view('partils/foot');
}
}
