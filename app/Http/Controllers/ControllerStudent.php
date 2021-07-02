<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\User;
use Illuminate\Http\Request;

class ControllerStudent extends Controller
{
    public function all(){
        $students = Student::all();
        return view("student.list_student",[
            "students"=>$students
        ]);
    }
    public function add(){
        $students = Student::all();
        return view("student.add_student",[
            "students"=>$students
        ]);
    }
    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        // upload file image
        $image = null;
        if($request->has("image")){
            $file = $request->file("image");
            $extName = $file->getClientOriginalExtension();// lấy đuôi file ( ví dụ như png, jpg)
            $fileName = time().".".$extName;
            $fileSize = $file->getSize();// lấy kích thước file
            $allow = ["png","jpg","jpeg","gif"];// chỉ cho phép nhưng file này up lên
            if(in_array($extName,$allow)){ // nếu đuôi file trong danh sách cho phép
                if($fileSize < 10000000){ // kich thuoc nho hon 10MB
                    try {
                        $file->move("upload",$fileName); // up file len host
                        $image = $fileName;
                    }catch (\Exception $e){}
                }
            }
        }

        try {
            Student::create([
                "name"=>$request->get("name"),
                "image"=>$image,
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return redirect()->to("student");
    }
    public function edit($id){
        $item = Student::findOrFail($id);
        return view("student.edit_student",[
            "item"=>$item
        ]);
    }
    public function update(Request $request,$id){
        $image = request("image");
        if ($image){
            $image = null;
            if ($request->has("image")){
                $file = $request->file("image");
                $exName = $file->getClientOriginalExtension();
                $fileName = time().".".$exName;
                $fileSize = $file->getSize();
                $allow = ["png","jpeg","jpg","gif"];
                if (in_array($exName,$allow)){
                    if ($fileSize < 10000000){
                        try {
                            $file->move("upload",$fileName);
                            $image = $fileName;
                        }catch (\Exception $e){}
                    }
                }
            }
            $students= Student::findOrFail($id);
            $students->update([
                "name"=>$request->get("name"),
                "image"=>$image,
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]);
        }else{
            $students = Student::findOrFail($id);
            $students->update([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]);
        }
        return redirect()->to("student");
    }
    public function destroy($id){
        Student::findOrFail($id)->delete();
        return redirect()->to("student");
    }
}
