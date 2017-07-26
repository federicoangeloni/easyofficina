<?php

namespace App\Http\Controllers;

use App\Customer as Customer;
use App\Repositories\CustomerRepository as CustomerRepository;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * @var CustomerRepository
     */

    public function __construct(CustomerRepository $customerRepository, Customer $customermodel)
    {
        $this->ActiveRepository = $customerRepository;
        $this->ActiveModel = $customermodel;
    }


    public function getall()
    {
        $customers = parent::getall();
        return view('customers.customerList')->with('customers', $customers);
    }

    public function getById($id)
    {
        $customer = parent::getById($id);
        return view('customers.customer')->with('customer', $customer);
    }

    public function searchIndex()
    {

        return view('customers.searchIndex');

    }

    public function searchResult(Request $filters)
    {

        $customers = parent::searchResult($filters);
        return view('customers.customerList')->with('customers', $customers);

    }

    public function addPrivateIndex()
    {
        return view('customers.addPrivateIndex');
    }

    public function addEnterpriseIndex()
    {
        return view('customers.addEnterpriseIndex');
    }

    public function add(Request $request)
    {
        $customer = parent::add($request);
        return view('customers.customer')->with('customer', $customer);
    }


}
