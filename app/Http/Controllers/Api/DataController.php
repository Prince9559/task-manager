namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'This is coming from a controller!'
        ]);
    }
}