<?php

namespace Emiolo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Emiolo\Http\Controllers\Controller;
use Emiolo\Repositories\User\UserRepository;
use Emiolo\Repositories\ImageRepository;

class AdminUsersController extends Controller
{

    /**
     *
     * @var UserRepository
     */
    protected $repository;

    /**
     *
     * @var ImageRepository
     */
    protected $imageRepository;

    function __construct(UserRepository $repository, ImageRepository $imageRepository)
    {
        $this->repository = $repository;
        $this->imageRepository = $imageRepository;
    }

        public function profile($id = null)
    {
        $user = $id == null ? auth()->user() : $this->repository->find($id);
        return view('users.profile', compact('user'));
    }

    public function addImage(Request $request)
    {
        $msg = $this->imageRepository->create($request->all());

        $user = auth()->user();
        return view('users.edit', compact('user', 'msg'));
    }

    public function users()
    {
        $users = $this->repository->all();
        return view('users.list', compact('users'));
    }

    public function profileEdit($id)
    {
        if (auth()->user()->id != $id) {
            return redirect("user/profile/{$id}");
        }
        $user = null;
        if (is_null($id)):
            $user = auth()->user();
        else:
            $user = $this->repository->find($id);
        endif;
        $msg = null;
        return view('users.edit', compact('user', 'msg'));
    }

    public function profileUpdate(Request $request)
    {
        $userId = auth()->user()->id;
        $this->repository->update($request->all(), $userId);
        return redirect("user/profile/edit/{$userId}");
    }

}
