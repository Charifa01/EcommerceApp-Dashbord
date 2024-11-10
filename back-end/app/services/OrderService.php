<?php 

namespace App\Services;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\OrderRepository;

class OrderService
{
    private $orderRepository;
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function paginate($params){
        return $this->orderRepository->paginate($params);
    }
    public function getAllOrders()
    {
        return $this->orderRepository->getAllOrders();
    }
    public function getOrderByID($id)
    {
        return $this->orderRepository->getOrderByID($id);
    }
    public function createOrder($data)
    {
        return $this->orderRepository->createOrder($data);
    }
    public function updateOrder($id, $data)
    {
        return $this->orderRepository->updateOrder($id, $data);
    }
    public function deleteOrder($id)
    {
        return $this->orderRepository->deleteOrder($id);
    }
}
