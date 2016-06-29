<?php

namespace Emiolo\Repositories;

use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Validator\Contracts\ValidatorInterface;
use Emiolo\Validators\ImageValidator;
use Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;

/**
 * Class ImageRepositoryEloquent
 * @package namespace Emiolo\Repositories;
 */
class ImageRepository
{

    private $storage;
    protected $validator;

    public function __construct(ImageValidator $validator)
    {
        $this->storage = Storage::disk('users');
        $this->validator = $validator;
    }

    public function create($data)
    {

        try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $user = auth()->user();
            $file = $data['file'];
            $extension = $file->getClientOriginalExtension();
            $data['file'] = $file;
            $data['extension'] = $extension;
            $data['lable'] = isset($data['lable']) ? $data['lable'] : null;
            $data['name'] = auth()->user()->name . auth()->user()->id;
            $data['user_id'] = auth()->user()->id;

            // user image update
            $user = auth()->user();
            $user->url_image = "img/users/{$data['name']}.{$data['extension']}";
            $user->save();

            if ($this->storage->exists("{$data['name']}.*")) {
                $this->storage->delete("{$data['name']}.*");
            }

            if ($this->storage->put("{$data['name']}.{$data['extension']}", File::get($data['file']))) {
                return [
                    'message' => "Avatar atualizado com sucesso!"
                ];
            }
        } catch (ValidatorException $ex) {
            return [
                'error' => TRUE,
                'message' => $ex->getMessageBag()
            ];
        }
    }

}
