<?php

namespace App\Http\Controllers\Logistics;

use App\Http\Controllers\Controller;
use App\Models\Logistics\Track;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;


/**
 * @OA\Tag(
 *  name="Track",
 *  description="API Endpoint Delivery Tracking"
 * )
 */

class TrackController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      operationId="findTrack",
     *      description="Get all tracks",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function find()
    {
        $result = Track::all();
        if (count($result) <= 0) return response()->json(["error" => true]);
        return response()->json($result);
    }

    /**
     * @OA\Get(
     *      path="/api/logistics/track/{id}",
     *      tags={"Track"},
     *      description="Get all tracks",
     *      operationId="findOneTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function findOne($id)
    {
        $result = Track::find($id);

        if (!$result) return response()->json(["error" => true]);

        return response()->json($result);
    }

    /**
     * @OA\Post(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      description="Create new Track",
     *      operationId="createTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function create(Request $req)
    {
        $result = Track::create([
            "temp" => $req->temp,
            "fuel_capacity" => $req->fuel_capacity,
            "speed" => $req->speed,
            "loc_lat" => $req->loc_lat,
            "loc_lng" => $req->loc_lng,
            "delivery_id" => $req->delivery_id,
            "status" => 'running'
        ]);
        return response()->json($result);
    }



    /**
     * @OA\Put(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      description="Update Track",
     *      operationId="updateTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */
    public function update(Request $req, $id)
    {
        $result = Track::find($id);

        if (!$result) return response()->json(['error' => true]);

        $result->temp = $req->temp;
        $result->fuel_capacity = $req->fuel_capacity;
        $result->speed = $req->speed;
        $result->loc_lat = $req->loc_lat;
        $result->loc_lng = $req->loc_lng;
        $result->delivery_id = $req->delivery_id;
        $result->status = 'running';
        $result->save();

        return response()->json($result);
    }

    /**
     * @OA\Delete(
     *      path="/api/logistics/track",
     *      tags={"Track"},
     *      description="Delete Track",
     *      operationId="deleteTrack",
     *      @OA\Response(
     *          response="200",
     *          description="Success"
     *      )
     * )
     */

    public function delete($id)
    {
        $result = Track::destroy($id);
        return response()->json(['error' => $result == 0]);
    }
}
