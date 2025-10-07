<?php namespace App\Controllers;

use App\Models\TicketModel;
use App\Models\UserModel;

class Tickets extends BaseController
{
    public function index()
    {
        $model = new TicketModel();
        $status = $this->request->getGet('status');
        $severity = $this->request->getGet('severity');

        $builder = $model;
        if ($status) $builder = $builder->where('status', $status);
        if ($severity) $builder = $builder->where('severity', $severity);

        $tickets = $builder->orderBy('id','desc')->findAll(100);
        return view('tickets/index', compact('tickets'));
    }

    public function create()
    {
        $users = (new UserModel())->orderBy('name','asc')->findAll();
        return view('tickets/create', compact('users'));
    }

    public function store()
    {
        $data = $this->request->getPost();
        (new TicketModel())->insert([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
            'severity' => $data['severity'],
            'assigned_to' => $data['assigned_to'] ?: null,
            'reporter_id' => session()->get('user_id') ?: null,
        ]);
        return redirect()->to('/tickets');
    }

    public function show($id)
    {
        $ticket = (new TicketModel())->find($id);
        return view('tickets/show', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = (new TicketModel())->find($id);
        $users = (new UserModel())->orderBy('name')->findAll();
        return view('tickets/edit', compact('ticket','users'));
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        (new TicketModel())->update($id, [
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
            'severity' => $data['severity'],
            'assigned_to' => $data['assigned_to'] ?: null,
        ]);
        return redirect()->to('/tickets/'.$id);
    }

    public function delete($id)
    {
        (new TicketModel())->delete($id);
        return redirect()->to('/tickets');
    }
}
