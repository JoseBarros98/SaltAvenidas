<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDistribuidorRequest;
use App\Http\Requests\UpdateDistribuidorRequest;
use App\Repositories\DistribuidorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DistribuidorController extends Controller
{
    //
    /** @var DistribuidorRepository */
    private $distribuidorRepository;

    public function __construct(DistribuidorRepository $distribuidorRepo)
    {
        $this->distribuidorRepository = $distribuidorRepo;
    }

    /**
     * Display a listing of a the Distribuidor.
     * 
     *  @param Request $request
     * 
     * @return Response 
     */
     
     public function index(Request $request)
     {
         $distribuidor = $this->distribuidorRepository->all();
         return view('distribuidor.index')
                ->with('distribuidor', $distribuidor);
     }

     public function distribuidor_list($compañia)
     {
         $distribuidor = $this->distribuidorRepository->all()->whereInStrict('compañia',(string)$compañia)->first();
        return $distribuidor;    
    }
    /**
     * Show the form for creating a new Distribuidor.
     *
     * @return Response
     */
    public function create()
    {
        return view('distribuidor.create');
    }
    /**
     * Store a newly created Distribuidor in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function store(CreateDistribuidorRequest $request)
    {
        $input = $request->all();

        $distribuidor = $this->distribuidorRepository->create($input);

        Flash::success('Distribuidor saved successfully.');

        return redirect(route('distribuidor.index'));
    }
     /**
     * Show the form for editing the specified Distribuidor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $distribuidor = $this->distribuidorRepository->find($id);

        if (empty($distribuidor)) {
            Flash::error('Distribuidor not found');

            return redirect(route('distribuidor.index'));
        }

        return view('distribuidor.edit')->with('distribuidor', $distribuidor);
    }
     /**
     * Update the specified Distribuidor in storage.
     *
     * @param int $id
     * @param UpdateClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDistribuidorRequest $request)
    {
        $distribuidor = $this->distribuidorRepository->find($id);

        if (empty($distribuidor)) {
            Flash::error('Distribuidor not found');

            return redirect(route('distribuidor.index'));
        }

        $distribuidor = $this->distribuidorRepository->update($request->all(), $id);

        Flash::success('Distribuidor updated successfully.');

        return redirect(route('distribuidor.index'));
    }
     /**
     * Remove the specified Distribuidor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $distribuidor = $this->distribuidorRepository->find($id);

        if (empty($distribuidor)) {
            Flash::error('Distribuidor not found');

            return redirect(route('distribuidor.index'));
        }

        $this->clientRepository->delete($id);

        Flash::success('Distribuidor deleted successfully.');

        return redirect(route('distribuidor.index'));
    }



}
