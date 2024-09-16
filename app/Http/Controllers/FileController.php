<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function showFiles(Request $request)
    {
        $query = $request->input('query');
        
        if ($query) {
            $files = File::where('name', 'LIKE', "%{$query}%")->get();
        } else {
            $files = File::all();
        }
        
   
        return view('vault', compact('files', 'query'));
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:5120000',  // 5GB in kilobytes
        ]);
        

        // Store the file in the 'uploads' directory within the 'public' disk
        $filePath = $request->file('file')->store('uploads', 'public');

        // Create a new file record in the database
        File::create([
            'name' => $request->file('file')->getClientOriginalName(),
            'file_path' => $filePath,
            'mime_type' => $request->file('file')->getMimeType(),
            'uploaded_at' => now(),
        ]);

        return redirect()->route('vault')->with('success', 'File uploaded successfully');
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file_path);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath, $file->name);
    }
    public function open($name)
    {
        // Decode URL-encoded filename
$name = urldecode($name);

        // Find the file by name
        $file = File::where('name', $name)->firstOrFail();
    
        // Construct the file path correctly
        $filePath = storage_path('app/public/' . $file->file_path);
    
        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
    
        // Return the file response
        return response()->file($filePath);
    }
    
    public function search(Request $request)
    {
        return $this->showFiles($request);
    }
    
    

    
    
    
    

    public function destroy($id)
    {
        $file = File::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($file->file_path);

        // Remove the file record from the database
        $file->delete();

        return redirect()->route('vault')->with('success', 'File deleted successfully');
    }
}
