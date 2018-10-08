return false;

return Response::json(['data'=>'test'], 400);

abort(500, 'dd helal');

abort(500, 'dd helal ',$x);

dd(' dd ',' helal ');

return response()->json($x);
