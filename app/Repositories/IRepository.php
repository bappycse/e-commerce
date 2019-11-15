<?php
namespace App\Repositories;
interface IRepository
{
    public function get($id);
    public function getAll($data);
    public function add($data);
    public function update(array $data, $id);
    public function delete($id);
}