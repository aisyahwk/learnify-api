<?php
namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\SubMateri;
use App\Models\MateriContent;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    // =====================
    // MATERI
    // =====================

    public function materiIndex()
    {
        return Materi::all();
    }

    public function materiStore(Request $req)
    {
        return Materi::create($req->all());
    }

    public function materiShow($id)
    {
        return Materi::with('subMateris')->findOrFail($id);
    }

    // =====================
    // SUBMATERI
    // =====================

    public function subStore(Request $req)
    {
        return SubMateri::create($req->all());
    }

    public function subShow($id)
    {
        return SubMateri::with('content')->findOrFail($id);
    }

    public function subDestroy($id)
{
    $sub = SubMateri::findOrFail($id);
    $sub->delete();

    return response()->json([
        'message' => 'Submateri berhasil dihapus'
    ]);
}
    // =====================
    // CONTENT
    // =====================

    public function contentStore(Request $req)
    {
        return MateriContent::create($req->all());
    }

    public function materiDestroy($id)
{
    $materi = Materi::findOrFail($id);
    $materi->delete();

    return response()->json([
        'message' => 'Materi berhasil dihapus'
    ]);
}
}
