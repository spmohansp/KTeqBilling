<?php



Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.billing.dashboard');
})->name('dashboard');

//Deposit
Route::get('/add_deposit','BillingController\DepositController@addDeposit');
Route::get('/view_deposit','BillingController\DepositController@viewDeposit');

//Expenses
Route::get('/add_expenses','BillingController\ExpenseController@addExpense');
Route::get('/view_expenses','BillingController\ExpenseController@viewExpense');

//Ledger
Route::get('/ledger', 'BillingController\LedgerController@viewLedger');
Route::post('/saveLedger','BillingController\LedgerController@addLedger')->name('addLedger');
Route::get('/ledger/{id}/edit', 'BillingController\LedgerController@editLedger')->name('editLedger');
Route::post('/ledger/{id}/update', 'BillingController\LedgerController@updateLedger')->name('updateLedger');
Route::get('/ledger/{id}/delete', 'BillingController\LedgerController@deleteLedger')->name('deleteLedger');


//Stock
Route::get('/add_stock','BillingController\StockController@addStock');
Route::get('/view_stock', 'BillingController\StockController@viewStock');

//Print
Route::get('/add_print','BillingController\PrintController@addPrint');
Route::get('/view_print','BillingController\PrintController@viewPrint');

//Clients
Route::get('add_clients','BillingController\ClientController@addClient');
Route::post('add_clients','BillingController\ClientController@saveClient')->name('saveClient');
Route::get('view_clients','BillingController\ClientController@viewClient');
Route::get('edit_clients/{id}','BillingController\ClientController@editClient')->name('editClient');
Route::post('update_clients/{id}','BillingController\ClientController@updateClient')->name('updateClient');
Route::get('delete_clients/{id}','BillingController\ClientController@deleteClient')->name('deleteClient');