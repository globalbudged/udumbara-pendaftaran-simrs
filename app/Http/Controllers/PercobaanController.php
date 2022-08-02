<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PercobaanController extends Controller
{
    public function index()
    {
        $tableName = 'pasiens';
        $data = Schema::getColumnListing($tableName);

        echo '<br>';
        echo '====================================== RESOURCE ============================';
        echo '<br>';
        foreach ($data as $key) {
            echo '\'' . $key . '\' => $this->' . $key . ',<br>';
        }
        echo '<br>';
        echo '====================================== INI UNTUK QUASAR ============================';
        echo '<br>';
        foreach ($data as $key) {
            echo $key . ': "", <br>';
        }
        echo '<br>';
        // return new JsonResponse($data);
    }
}
