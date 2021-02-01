<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index()
    {

        // $users = new User();
        // $users->id = "13";
        // $users->name = "Jamile Silva";
        // $users->email = "JamileTest@gmail.com";
        // $users->password = Hash::make("123545");
        // $users->save();

        $users = User::orderBy("name")->paginate(10);


        return view('users.index', compact("users"));
    }

    public function search(Request $request)
    {

        $users = User::where('name', 'like', '%' . $request->get('keyword') . '%')
            ->where('email', 'like', '%' . $request->get('email_user') . '%')
            ->orderBy("name")->paginate(10);


        //Ordenação
        switch ($request->get('order_by')) {

            case "newest";

                $users = User::where('name', 'like', '%' . $request->get('keyword') . '%')
                    ->where('email', 'like', '%' . $request->get('email_user') . '%')
                    ->orderby('created_at', 'desc')
                    ->paginate(10);

                break;

            case "older";

                $users = User::where('name', 'like', '%' . $request->get('keyword') . '%')
                    ->where('email', 'like', '%' . $request->get('email_user') . '%')
                    ->orderby('created_at', 'asc')
                    ->paginate(10);

                break;
        }

        return view('users.index', compact("users"));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {

        try {

            $data = $request->all();

            $user = new User();

            $user->create($data);

            $request->session()->flash('success', 'Registro gravado com sucesso!');
        } catch (\Exception $e) {

            $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
        }

        return redirect()->back();
        // $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->password = $data['password'];
        // $user->password_Confirmation = $data['password_Confirmation'];
        // $user->save();
    }

    public function show(User $user)
    {
        //
    }

    public function edit(Request $request, User $user)
    {
        //

    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(Request $request, User $user)
    {
        //
    }
}
