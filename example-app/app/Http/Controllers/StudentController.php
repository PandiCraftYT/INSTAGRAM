<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return response()->json($students, 200);
    }

    public function store(Request $request){
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password

        ]);

        $data = [
            'status' => 201,
            'message' => 'El estudiante se ha creado exitosamente.',
            'student' => $student
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);

        if(!$student){
            $data = [
                'status' => 404,
                'message' => 'No se ha encontrado el estudiante'
            ];

            return response()->json($data, 404);
        }

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = $request->password;

        $student->save();

        $data = [
            'status' => 200,
            'message' => 'El estudiante se ha actualizado exitosamente.',
            'student' => $student
        ];

        return response()->json($data, 200);
    }   
    
    public function destroy ($id){
        $student = Student::find($id);

        if(!$student){
            $data = [
                'status' => 404,
                'message' => 'No se ha encontrado el estudiante'
            ];

            return response()->json($data, 404);
        }

        $student->delete();

        $data = [
            'status' => 200,
            'message' => 'Se ha eliminado exitosamente.'
        ];
        return response()->json($data, 200);
    }

    /**
     * [POST]
     * URI: Students/Authenticate
     * email, password
     * 
     * Returns Status Code: 401, 200
     */
    public function authenticate(Request $request) {
        // Validar la entrada
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $student = Student::where('email', $credentials['email'])->first();

        if ($student && $student->password == $credentials['password']) {
            $data = [
                'status' => 200,
                'message' => 'Inicio de sesion exitoso.'
            ];
            return response()->json($data, 200);
        }

        $data = [
            'status' => 401,
            'message' => 'Email y/o Contraseña incorrectos.'
        ];
        return response()->json($data, 401);
    }
}
