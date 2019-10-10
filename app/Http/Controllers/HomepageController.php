<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;

    class HomepageController extends Controller
    {
        public function index()
        {
            $name = "Bedirhan";
            $surname = "Kaplan";
            $names = ['Bedirhan', 'Sümeyye', 'Emre', 'Berna'];
            $users = [
                ['id' => 1, 'userName' => 'Bedirhan'],
                ['id' => 2, 'userName' => 'Sümeyye'],
                ['id' => 3, 'userName' => 'Emre'],
                ['id' => 4, 'userName' => 'Berna'],
            ];
            return view('homepage', compact('name','surname', 'names'));
            //return view('homepage')->with('name','Deneme'));
            //return view('homepage')->with(['name' => $isim], ['surname' => $surname ]));
        }
    }
?>
