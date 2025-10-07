<?php namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','description','status','severity','assigned_to','reporter_id'];
    protected $returnType = 'array';
}
