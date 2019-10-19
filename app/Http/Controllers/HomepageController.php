<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;
    use App\Models\Kategori;
    class HomepageController extends Controller
    {
        public function index()
        {
            $kategoriler = Kategori::all()->take(7);
            return view('homepage', compact('kategoriler'));

        }
    }
?>
