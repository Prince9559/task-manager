
<?php
use App\Models\Book;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tasks', function (Request $request) {

    $validated = $request->validate([
        'task_name' => 'required|string|max:255',
        'status'    => 'required|string|max:255',
    ]);

    $task = Task::create($validated);
    return response()->json([
        'message' => 'Task created successfully!',
        'data' => $task
    ]);
});


Route::put('/tasks/{id}', function (Request $request, $id) {
    $task = Task::find($id);

    if (!$task) {
        return response()->json(['message' => 'Task not found'], 404);
    }
    $validated = $request->validate([
        'task_name' => 'required|string|max:255',
        'status'    => 'required|string|max:255',
    ]);

    $task->update($validated);
    return response()->json([
        'message' => 'Task updated successfully!',
        'data' => $task
    ]);
});



Route::delete('/tasks/{id}', function ($id) {
    $task = Task::find($id);

    if (!$task) {
        return response()->json(['message' => 'Task not found'], 404);
    }

    $task->delete();
    return response()->json([
        'message' => 'Task deleted successfully!'
    ]);
});


Route::get('/tasks', function () {
    return Task::all();
});



Route::get('/hello', function () {
    return response()->json(['message' => 'Hello World!']);
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



