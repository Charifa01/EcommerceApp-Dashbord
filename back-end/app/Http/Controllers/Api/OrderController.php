<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index(Request $request)
    {
        $params = $request->only(['per_page']);
        $orders = $this->orderService->paginate($params);
        return OrderResource::collection($orders);
    }
    public function getAllOrders()
    {
        $orders = $this->orderService->getAllOrders();
        return OrderResource::collection($orders);
    }    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return  $this->orderService->createOrder($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = $this->orderService->getOrderByID($id);
        return new OrderResource($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $order = $this->orderService->updateOrder($id ,$data);
        return new OrderResource($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->orderService->deleteOrder($id);
    }
}
