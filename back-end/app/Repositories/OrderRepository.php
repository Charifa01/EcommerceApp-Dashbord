<?php

namespace App\Repositories;
use App\Models\Order;

class OrderRepository
{
    public function paginate($params){

        $query = Order::orderBy('created_at','desc');
        return $query->paginate($params['per_page'] ?? 10);
    }
    public function getAllOrders(){
        return Order::all();
    }
    public function getOrderByID($id)
    {
        return Order::findOrFail($id);
    }
    public function createOrder($data)
    {
        return Order::create($data);
    }
    public function updateOrder($id, $data)
    {
        $order = Order::findOrFail($id);
        $order->update($data);
        return $order;
    }
    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        if($order){
            $order->delete();
            return response()->json(['message' => 'Order deleted successfully.'],200);
        }
        return response()->json(['message' => 'Order not found.'], 404);
    }


}
