<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;


/**
 * @OA\Tag(
 *  name="Driver",
 *  description="API Endpoint Driver"
 * 	)
 */

class DriverController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/logistics/driver",
     *      tags={"Driver"},
     *      operationId="findDriver",
     *      description="Get all driver",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function find()
    {
        $result = Driver::all();
        if (count($result) <= 0) return response()->json(["error" => true]);

        return response()->json($result);
    }

    /**
     * @OA\Get(
     *      path="/api/logistics/driver/{id}",
     *      tags={"Driver"},
     *      operationId="findOneDriver",
     *      description="Get one driver",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function findOne($id)
    {
        $result = Driver::find($id);

        if (!$result) return response()->json(["error" => true]);

        return response()->json($result);
    }

    /**
     * @OA\Post(
     *      path="/api/logistics/driver",
     *      tags={"Driver"},
     *      operationId="createDriver",
     *      description="Create Driver",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function create(Request $req)
    {
        $driver = new Driver();
        $driver->name = $req->name;
        $driver->phone = $req->phone;
        $driver->age = $req->age;
        $driver->status = $req->status;
        $save = $driver->save();

        if (!$save) return response()->json(['success' => false]);
        return response()->json(['success' => true]);
    }

    /**
     * @OA\Delete(
     *      path="/api/logistics/driver",
     *      tags={"Driver"},
     *      operationId="deleteDriver",
     *      description="Delete Driver",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function delete($id)
    {
        $result = Driver::destroy($id);
        return response()->json(['error' => $result == 0]);
    }

    /**
     * @OA\Put(
     *      path="/api/logistics/driver/{id}",
     *      tags={"Driver"},
     *      operationId="updateDriver",
     *      description="Update Driver",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function update(Request $req, $id)
    {
        $result = Driver::find($id);
        if (!$result) return response()->json(["error" => true]);

        // TODO: Edit

        return response()->json($result);
    }
}
