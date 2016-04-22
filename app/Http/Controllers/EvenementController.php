<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvenementCreateRequest;
use App\Http\Requests\EvenementUpdateRequest;

use App\Repositories\EvenementRepository;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class EvenementController extends Controller
{

    protected $evenementRepository;

    protected $nbrPerPage = 4;

    public function __construct(EvenementRepository $evenementRepository)
    {
        $this->evenementRepository = $evenementRepository;
    }

    public function index()
    {
        $evenement = $this->evenementRepository->getPaginate($this->nbrPerPage);
        $links = $evenement->setPath('')->render();

        return view('evenement\index', compact('evenement', 'links'));
    }

    public function create()
    {
        return view('evenement\create');
    }

    public function store(EvenementCreateRequest $request)
    {
        $evenement = $this->evenementRepository->store($request->all());

        return redirect('evenement')->withOk("L'évènement " . $evenement->name . " a été créé.");
    }

    public function show($id)
    {
        $evenement = $this->evenementRepository->getById($id);

        return view('evenement\show',  compact('evenement'));
    }

    public function edit($id)
    {
        $evenement = $this->evenementRepository->getById($id);

        return view('evenement\edit',  compact('evenement'));
    }

    public function update(EvenementUpdateRequest $request, $id)
    {
        $this->evenementRepository->update($id, $request->all());

        return redirect('evenement')->withOk("L'évènement " . $request->input('intitule') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->evenementRepository->destroy($id);

        return redirect()->back();
    }

}