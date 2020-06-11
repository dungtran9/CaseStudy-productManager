<?php


namespace File\controller;


use File\model\CustomerDB;

class CustomerController
{
    protected $customer;


    public function __construct()
    {
        $this->customer = new CustomerDB();
    }

    public function viewCustomer()
    {
        $customers = $this->customer->view();
        include "src/view/customers/listCustomers.php";
    }

    public function deleteCustomer($code)
    {
        $this->customer->delete($code);
        header("location:index.php?page=list-customers");
    }

}