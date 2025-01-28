<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\AssesmentData;
use App\Models\AssesmentMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.assessment.list');
    }

    public function view($uuid)
    {
        $assessment = Assesment::where('uuid', $uuid)->with('data', 'data.media')->first();
        //   dd($assessment);
        return view('admin.assessment.view', compact('assessment'));
    }

    public function update(Request $request)
    {
        AssesmentData::where('uuid', $request->uuid)->update($request->except('_token'));
        return back()->with("success", "Updated Successfully");
    }

    public function assessments()
    {
        $assessments = Assesment::all();
        return view('admin.assessment.list', compact('assessments'));
    }

    public function update_status(Request $request)
    {
        Assesment::where('id', $request->id)->update(['status' => $request->status]);
        return back()->with('success', "Status updated");
    }

    public function uploadFiles(Request $request)
    {
        try {
            // Validate the uploaded files
            $request->validate([
                'files' => 'required|array|min:1', // Require at least one file
                'files.*' => 'mimes:mp4,pdf,jpg,jpeg|max:10240', // Max file size: 10MB
            ]);

            // Loop through the files and store them
            $uploadedFiles = [];
            foreach ($request->file('files') as $file) {
                // Get the original file name without extension
                $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                // Add 6 unique characters to the file name
                $uniqueFileName = $originalFileName . '_' . \Str::random(6) . '.' . $file->getClientOriginalExtension();

                // Store files in the 'uploads' directory (same folder for all types)
                $path = $file->storeAs('uploads', $uniqueFileName, 'public');

                // Add the path to the array (optional: store in DB if needed)
                $uploadedFiles[] = $path;
            }

            foreach ($uploadedFiles as $path) {
                AssesmentMedia::create(['assesment_data_id' => $request->assesment_data_id, 'path' => $path, 'uuid' => \Str::uuid()->toString()]);
            }

            return back()->with('success', 'Files uploaded successfully!');
        } catch (\Exception $ex) {
            // dd($ex);
            return back()->with('error', 'Something went wrong');
        }
    }

    public function download($filename)
    {
        try {
            // Assuming the file is stored in the 'public' disk
            $filePath = public_path("storage/uploads/" . $filename);
            // dd($filePath);
            // Check if the file exists
            if (file_exists($filePath)) {
                // Return the file as a response
                return response()->download($filePath);
            }
            return abort(404, 'File not found.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

        // If file does not exist, return a 404 error

    }

    public function delete_file($uuid)
    {
        try {
            $data = AssesmentMedia::where('uuid', $uuid)->first();
            $filePath = $data->path;
            if (Storage::disk('public')->exists($filePath)) {
                // Delete the file
                Storage::disk('public')->delete($filePath);
            }
            $data->delete();
            return back()->with('success', 'File deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function users(Request $request)
    {
        $params = $request->params;
        if ($params) {
            $users = User::where('name', 'like', '%' . $params . '%')
                ->orWhere('email', 'like', '%' . $params . '%')
                ->get();
        } else {
            $users = User::all();
        }

        return view('admin.user.list', compact('users'));
    }

    public function update_user(Request $request)
    {
        try {
            User::find($request->id)->update($request->except('_token'));
            return back()->with('success', 'User updated successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

    }

    public function delete_user($uuid)
    {
        try {
            User::where('uuid', $uuid)->delete();
            return back()->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong');
        }
    }

}
