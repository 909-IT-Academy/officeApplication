MVC CONCEPT:
Route::get("/employee", employeeController@index); // Route

class employeeController{ // controller
    public function index(){
        $employees = Employee::getAll(); // model

        return view employee->with($employees); // pass value to the view
    }
}

class Employee{
    public function getAll(){

    }
}

// view 
foreach($employees as $employee){
    //html
    <table>
        <tr>
            <td>$employee</td>
        </tr>
    </table>
}