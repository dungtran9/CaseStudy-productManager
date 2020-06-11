<?php


namespace File\model;


class CustomerDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnext();
        $this->database = $db->connect();

    }

    public function creat($customer)
    {
        $sql = "INSERT INTO `customers`(`id`, `name`, `email`, `phone`, `address`) VALUES (?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $customer->getId());
        $stmt->bindParam(2, $customer->getName());
        $stmt->bindParam(3, $customer->GetEmail());
        $stmt->bindParam(4, $customer->GetPhone());
        $stmt->bindParam(5, $customer->GetAddress());
        $stmt->execute();
    }

    public function view()
    {
        $sql = "SELECT * FROM customers ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}