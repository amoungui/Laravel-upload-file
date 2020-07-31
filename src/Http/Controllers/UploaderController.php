<?php 

namespace Scaffolder\FileUploader\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Scaffolder\FileUploader\Http\Requests\FileRequest;

class UploaderController extends Controller
{
    public function getForm()
	{
		return view('uploader::fichier');
	}

	public function postForm(FileRequest $request)
	{
		$file = $request->file('file');

		if($file->isValid())
		{
			$chemin = config('file.path');

			$extension = $file->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			if($file->move($chemin, $nom)) {
				//return view('file_ok');
			}
		}

		return redirect('upload')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
	}
}
