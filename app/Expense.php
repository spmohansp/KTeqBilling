<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function ExpenseCategory(){
        return $this->hasOne(ExpenseCategory::class,'id','expense_type_id');
    }
    public function EmployeeName(){
        return $this->hasOne(Employee::class,'id','employee_id');
    }
}
