<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/shstest', function () {
    return view('public.shs-form');
});
Route::get('/collegetest', function () {
    return view('public.college-form');
});

Route::get('/dashboard', function (Request $request) {
    $abm = Detail::where('preferred_strand', 'ABM')->count();
    $humss = Detail::where('preferred_strand', 'HUMSS')->count();    
    $stem = Detail::where('preferred_strand', 'STEM')->count();    
    $gas = Detail::where('preferred_strand', 'GAS')->count();
    $ict_techpro = Detail::where('preferred_strand', 'ICT-TECHPRO')->count();
    $tvl = Detail::where('preferred_strand', 'TVL')->count();



    $details = Detail::where('grade_level_code', '1')
        ->when($request->search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('middle_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('preferred_strand', 'like', "%{$search}%")
                  ->orWhere('contact_number', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

    return view('dashboard', compact('details', 'abm', 'humss', 'stem', 'gas', 'ict_techpro','tvl'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard2', function (Request $request) {
    
    $bscs = Detail::where('preferred_strand', 'BSCS')->count();
    $act = Detail::where('preferred_strand', 'ACT')->count();
    $bsbahrm = Detail::where('preferred_strand', 'BSBA-HRM')->count();
    $bsmm = Detail::where('preferred_strand', 'BSMM')->count();
    $bsed = Detail::where('preferred_strand', 'BSED')->count();
    $beed = Detail::where('preferred_strand', 'BEED')->count();
    $abeng = Detail::where('preferred_strand', 'AB-ENG')->count();
    $bshm = Detail::where('preferred_strand', 'BSHM')->count();
    $bstm = Detail::where('preferred_strand', 'BSTM')->count();
    $bspsy = Detail::where('preferred_strand', 'BSPsy')->count();
    $bstm = Detail::where('preferred_strand', 'BSTM')->count();



    $details = Detail::where('grade_level_code', '2')
        ->when($request->search, function ($query, $search) {
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('middle_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('preferred_strand', 'like', "%{$search}%")
                  ->orWhere('contact_number', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

    return view('collegedashboard', compact('details', 'bscs', 'act', 'bsbahrm', 'bsmm', 'bsed', 'beed', 'abeng', 'bshm', 'bstm', 'bspsy','bstm'));
})->middleware(['auth', 'verified'])->name('dashboard2');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/form_submission', [DetailController::class, 'store'])->name('form_submission');
    
    Route::get('/sub_form', function () {
    return view('submission.index');
    })->middleware(['auth', 'verified'])->name('sub_form');

    Route::get('/college_form', function () {
        return view('submission.college');
    })->middleware(['auth', 'verified'])->name('college_form');

    Route::get('/sample', function () {
        return view('submission.index2');
    })->middleware(['auth', 'verified'])->name('index2');

    Route::put('/submissions/{detail}', [DetailController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('edit');

      Route::get('/submissions/{detail}', [DetailController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('view');



      Route::delete('/submissions/{detail}', [DetailController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('submissions.destroy');

});





require __DIR__.'/auth.php';
