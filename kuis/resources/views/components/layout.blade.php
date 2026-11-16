Route::get('/home', function () {
    return view('home', [
        'title' => 'Homepage',
        'daftar' => ['Belajar Routing', 'Belajar Blade', 'Belajar Component']
    ]);
});