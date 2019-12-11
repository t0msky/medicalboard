<?php

Route::get('/surat_kuiri_bencana_kerja/{nt_id}', 'Letter\LetterController@viewletter')->name('view.letter');
