<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ClasseCreateRequest;
use App\Http\Requests\ClasseUpdateRequest;

use App\Repositories\ClasseRepository;


class ClasseController extends Controller
{

    protected $ClasseRepository;

    protected $nbrPerPage = 4;

    public function __construct(ClasseRepository $ClasseRepository)
    {
        $this->ClasseRepository = $ClasseRepository;
    }

    public function index()
    {
        $classes = $this->ClasseRepository->getPaginate($this->nbrPerPage);
        $links = $classes->setPath('')->render();

		return view('classe\index', compact('classes', 'links'));
	}

    public function create()
    {
        return view('classe\create');
    }

    public function store(ClasseCreateRequest $request)
    {
        $classe = $this->ClasseRepository->store($request->all());

        return redirect('classe')->withOk("La classe " . $classe->name . " a été créé.");
    }

    public function show($id)
    {
        $classe = $this->ClasseRepository->getById($id);

        return view('classe\show',  compact('classe'));
    }

    public function edit($id)
    {
        $classe = $this->ClasseRepository->getById($id);

        return view('classe\edit',  compact('classe'));
    }

    public function update(ClasseUpdateRequest $request, $id)
    {
        $this->ClasseRepository->update($id, $request->all());

        return redirect('classe')->withOk("La classe " . $request->input('intitule') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->ClasseRepository->destroy($id);

        return redirect()->back();
    }

}