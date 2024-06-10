<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $query = Feedback::query();

        // Cek apakah ada input pencarian
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('code', 'LIKE', '%' . $search . '%')
                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('brand_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('status', 'LIKE', '%' . $search . '%')
                    ->orWhere('created_at', 'LIKE', '%' . $search . '%');
            });
        }

        // Ambil data sesuai query
        $data = $query->get();

        return view('feedback', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback');
    }

    public function accept(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        if (!$feedback) {
            return redirect()->back()->with('error', 'Feedback not found.');
        }

        $feedback->reviewed = true;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback has been reviewed.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $data = Feedback::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('feedback.list');
    }
}
